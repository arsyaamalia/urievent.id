<?php

namespace App\Controllers;

use App\Models\kategori_layananModel;
use App\Models\produk_layananModel;
use App\Models\paket_layananModel;
use App\Models\subkategori_layananModel;

class Upload extends BaseController
{
    public function __construct()
    {
        $this->produk_layanan = new produk_layananModel();
        $this->paket_layanan = new paket_layananModel();
        $this->kategori_layanan = new kategori_layananModel();
        $this->subkategori_layanan = new subkategori_layananModel();
    }
    public function generateIDLayanan()
    {
        $dataProduk = $this->produk_layanan->orderBy('id_layanan', 'desc')->first();
        // explode
        $id_layanan_string =  explode('Y', $dataProduk['id_layanan']);
        // string to int
        $id_layanan_terakhir = intval(end($id_layanan_string));
        // nambah id+1 buat id baru
        $new_id_layanan =  $id_layanan_terakhir + 1;
        // balikin jadi string buat id baru
        $new_str_id_layanan = (string) $new_id_layanan;
        // cek lenght string dan validasi sekalian bikin 
        if (strlen($new_str_id_layanan) == 2) {
            $new_id = 'LAY0' . $new_str_id_layanan;
        } else {
            $new_id = 'LAY' . $new_str_id_layanan;
        }
        return $new_id;
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
            return ($product != null) ? $product['image'] : null;
        }

        $fileName = $fileImage->getRandomName();
        $fileImage->move('img/picture_poster_layanan', $fileName);


        if ($product != null && $product['image'] != 'product-default.jpg') {
            unlink('img/picture_poster_layanan/' . $product['image']);
        }

        return $fileName;
    }

    public function index()
    {
        $dataKategori = $this->kategori_layanan->findAll();
        $dataPage = [
            'title' => "UriEvent | Upload Service",
            'dataKategori' => $dataKategori
        ];
        return view('pages/upload', $dataPage);
    }
    public function getDataSubKategori($id_kategori)
    {
        // $id_kategori = $this->input->post('id_kategori');
        $dataSubKategori = $this->subkategori_layanan->getDataSubKategori($id_kategori);
        // $this->output->set_content_type('application/json')->set_output(json_encode($dataSubKategori));
        // echo json_encode($dataSubKategori);
        $data = json_encode($dataSubKategori);
        // echo $data;
        // foreach ($dataSubKategori as $row) {
        //     $output = '<option value="' . $row->id_subkategori . '">' . $row->nama_subkategori . '</option>';
        // }
        // // $data = json_encode($output);
        // $this->$output->set_content_type
        echo $data;
    }

    public function save()
    {
        // $button_save = $this->input->post('button_save');
        $button_save = $this->request->getVar('button_save');
        if ($button_save == 'save_draft') {
            $status_layanan = "draft";
        } else if ($button_save == "save") {
            $status_layanan = 'uploaded';
        }

        $dataProduk = $this->request->getVar();
        $dataProduk;
        $id_layanan = $this->generateIDLayanan();

        $daftarPaket = $this->request->getVar('package');
        // array to string 
        $step_before = join('__', $this->request->getVar('stepBefore'));
        $step_after = join('__', $this->request->getVar('stepAfter'));
        $value = join('__', $this->request->getVar('value'));

        $fileGambar = $this->request->getFile('layanan-img');

        $dataProduk = [
            'id_layanan' => $id_layanan,
            'id_kategori' => $this->request->getVar('category'),
            'id_subkategori' => $this->request->getVar('subcategory'),
            'id_user' => session()->get('id_user'),
            'nama_instansi' => $this->request->getVar('company-name'),
            'email_instansi' => $this->request->getVar('company-email'),
            'whatsapp' => $this->request->getVar('whatsapp-input'),
            'instagram' => $this->request->getVar('instagram-input'),
            'picture_poster' => $this->getImageLayanan($fileGambar),
            'deskripsi' => $this->request->getVar('desc-input'),
            'step_before' => $step_before,
            'step_after' => $step_after,
            'other' => $this->request->getVar('other-input'),
            'value' => $value,
            'status_layanan' => $status_layanan
        ];

        $this->produk_layanan->save($dataProduk);
        foreach ($daftarPaket as $paket) {
            $id_paket = $this->generateIDPaket();
            $dataPaket = [
                'id_paket' => $id_paket,
                'id_layanan' => $id_layanan,
                'nama_paket' => $paket['name'],
                'deskripsi_paket' => $paket['desc'],
                'harga_paket' => $paket['prize']
            ];

            $this->paket_layanan->save($dataPaket);
        }

        return redirect()->to('/pages');
    }
}
