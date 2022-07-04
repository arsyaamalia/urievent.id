<?php

namespace App\Controllers;

use App\Models\kategori_layananModel;
use App\Models\produk_layananModel;
use App\Models\paket_layananModel;
use App\Models\subkategori_layananModel;

class Editlayanan extends BaseController
{
    protected $dataPaketNow;

    public function __construct()
    {
        $this->produk_layanan = new produk_layananModel();
        $this->paket_layanan = new paket_layananModel();
        $this->kategori_layanan = new kategori_layananModel();
        $this->subkategori_layanan = new subkategori_layananModel();
    }

    public function mapingProdukPaket($dataProduk, $dataPaket)
    {
        $daftar_produk = array_map(function ($produk) use ($dataPaket) {
            $daftar_paket = array_filter($dataPaket, function ($paket) use ($produk) {
                // dd($paket, $produk);
                return $paket['id_layanan'] == $produk['id_layanan'];
            });

            $produk['paket'] = $daftar_paket;
            $daftar_harga = array_column($daftar_paket, 'harga_paket');
            if (!empty($daftar_harga)) {
                $produk['harga_max'] = max($daftar_harga);
                $produk['harga_min'] = min($daftar_harga);
            } else {
                $produk['harga_max'] = '0';
                $produk['harga_min'] = '0';
            }
            return $produk;
        }, $dataProduk);

        return $daftar_produk;
    }

    public function index($id_layanan, $id_kategori, $id_subkategori)
    {

        $dataProduk = $this->produk_layanan->getDetail($id_layanan);
        $dataPaket = $this->paket_layanan->findAll();
        $dataPaketNow = $this->paket_layanan->getDetail($id_layanan);
        $dataKategori = $this->kategori_layanan->findAll();

        $daftar_produk = $this->mapingProdukPaket($dataProduk, $dataPaket);
        $dataProduk = array_shift($daftar_produk);

        $kategori_now = $this->kategori_layanan->getKategori($id_kategori);
        $subKategori_now = $this->subkategori_layanan->getSubKat($id_subkategori);
        $steps_before = explode('__', $dataProduk['step_before']);
        $steps_after = explode('__', $dataProduk['step_after']);
        $values = explode('__', $dataProduk['value']);

        // dd($dataProduk);
        // dd($subKategori_now);
        // $daftar_produk['nama_kategori'] = $namaKategori['nama_kategori'];

        // $step_before_list = [
        //     "Upload poster event yang sudah berlogo company kami",
        //     "Isi caption atau tambahan lainnya untuk keperluan upload",
        //     "Kirim bukti transfer"
        // ];
        // $step_before_produk = explode('__', $dataProduk['step_before']);
        // $steps = array_map(function ($step) use($step_before_list)
        // {
        //     array_search($step, $step_before_list)
        // }, $step_before_produk)

        // dd(count($dataProduk['paket']));

        $dataPage = [
            'title' => "UriEvent | Edit Service",
            'dataKategori' => $dataKategori,
            'kategori_now' => $kategori_now,
            'subKategori_now' =>  $subKategori_now,
            'dataProduk' => $dataProduk,
            'steps_before' => $steps_before,
            'steps_after' => $steps_after,
            'values' => $values,
            'dataPaketNow' => $dataPaketNow
        ];
        return view('pages/editlayanan', $dataPage);
    }

    public function saveEdit($id_layanan)
    {
        // $button_save = $this->input->post('button_save');
        // dd($this->request->getVar());
        $button_save = $this->request->getVar('button_save');
        if ($button_save == 'save_draft') {
            $status_layanan = "draft";
        } else if ($button_save == "save") {
            $status_layanan = 'uploaded';
        }

        $id_layanan = $id_layanan;
        $dataProduk = $this->produk_layanan->getDetail($id_layanan);
        $dataProduk_new = $this->request->getVar();

        // array to string 
        $step_before = join('__', $this->request->getVar('stepBefore'));
        $step_after = join('__', $this->request->getVar('stepAfter'));
        $value = join('__', $this->request->getVar('value'));

        $fileGambar = $this->request->getFile('layanan-img');

        $daftarPaket = $dataProduk_new['package'];

        $dataProduk = [
            'id_layanan' => $id_layanan,
            'id_kategori' => $this->request->getVar('category'),
            'id_subkategori' => $this->request->getVar('subcategory'),
            'id_user' => session()->get('id_user'),
            'nama_instansi' => $this->request->getVar('company-name'),
            'email_instansi' => $this->request->getVar('company-email'),
            'whatsapp' => $this->request->getVar('whatsapp-input'),
            'instagram' => $this->request->getVar('instagram-input'),
            'picture_poster' => $this->getImageLayanan($fileGambar, $dataProduk),
            'deskripsi' => $this->request->getVar('desc-input'),
            'step_before' => $step_before,
            'step_after' => $step_after,
            'other' => $this->request->getVar('other-input'),
            'value' => $value,
            'status_layanan' => $status_layanan
        ];

        $this->produk_layanan->save($dataProduk);

        foreach ($daftarPaket as $paket) {
            if (!isset($paket['id_paket'])) {
                $id_paket = $this->generateIDPaket();
            } elseif (isset($paket['id_paket'])) {
                $id_paket = $paket['id_paket'];
            }
            $dataPaket = [
                'id_paket' => $id_paket,
                'id_layanan' => $id_layanan,
                'nama_paket' => $paket['name'],
                'deskripsi_paket' => $paket['desc'],
                'harga_paket' => $paket['prize']
            ];

            $this->paket_layanan->save($dataPaket);
        }
        return redirect()->to('/pages/uriservice');
    }



    public function generateIDPaket()
    {
        $dataPaket = $this->paket_layanan->orderBy('id_paket', 'desc')->first();
        // explode
        $id_paket_string =  explode('P', $dataPaket['id_paket']);
        // string to int
        $id_paket_terakhir = intval(end($id_paket_string));
        // dd($id_paket_string);
        // nambah id+1 buat id baru
        $new_id_paket =  $id_paket_terakhir + 1;
        // balikin jadi string buat id baru
        $new_str_id_paket = (string) $new_id_paket;
        // cek lenght string dan validasi sekalian bikin 
        if (strlen($new_str_id_paket) == 2) {
            $new_id_paket = 'P0' . $new_str_id_paket;
        } else {
            $new_id_paket = 'P' . $new_str_id_paket;
        }
        return $new_id_paket;
    }


    public function getImageLayanan($fileImage, $product = null)
    {
        if ($fileImage->getError() == 4) {
            if ($product[0] != null && isset($product[0]['picture_poster'])) {
                return $product[0]['picture_poster'];
            }
            return null;
        }

        $fileName = $fileImage->getRandomName();
        $fileImage->move('img/picture_poster_layanan', $fileName);

        if ($product[0] != null && isset($product[0]['picture_poster'])) {
            // unlink('img/picture_poster_layanan/' . $product['picture_poster']);
            return $product[0]['picture_poster'];
        }

        return $fileName;
    }

    public function getDataSubKategori($id_kategori)
    {
        $dataSubKategori = $this->subkategori_layanan->getDataSubKategori($id_kategori);
        $data = json_encode($dataSubKategori);
        echo $data;
    }
}
