<?php

namespace App\Controllers;

use App\Models\produk_layananModel;
use App\Models\paket_layananModel;
use App\Models\UserModel;
use CodeIgniter\Database\Database;

class Pages extends BaseController
{
    protected $produk_layanan;

    public function __construct()
    {
        $this->produk_layanan = new produk_layananModel();
        $this->paket_layanan = new paket_layananModel();
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

    public function index()
    {
        $session = session();
        $dataProduk = $this->produk_layanan->paginate(15, 'daftar_produk');
        $dataPaket = $this->paket_layanan->findAll();

        $daftar_produk = $this->mapingProdukPaket($dataProduk, $dataPaket);

        $dataPage = [
            'title' => "UriEvent | Homepage",
            'daftar_produk' => $daftar_produk,
            'pager' => $this->produk_layanan->pager
        ];

        return view('pages/home', $dataPage);
    }

    public function about()
    {
        $dataPage = [
            'title' => "UriEvent | About Us",
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/about', $dataPage);
    }


    public function advertise()
    {

        $dataPage = [
            'title' => "UriEvent | Advertise With Us"
        ];
        return view('pages/advertise', $dataPage);
    }

    public function search()
    {
        $cari = $this->request->getVar('cari');

        // $dataProduk = $this->produk_layanan->search($cari)->paginate(5, 'daftar_produk');
        $dataProduk = $this->produk_layanan->search($cari)->findAll();

        $dataPaket = $this->paket_layanan->findAll();
        $daftar_produk = $this->mapingProdukPaket($dataProduk, $dataPaket);

        $dataPage = [
            'title' => "Urievent | Search Page",
            'daftar_produk' => $daftar_produk,
            'cari' => $cari,
            'pager' => $this->produk_layanan->pager
        ];
        return view('/pages/search', $dataPage);
    }

    public function newID()
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
        dd($new_id);
    }



    public function medpart_name()
    {

        $dataPage = [
            'title' => "UriEvent | medpart_name",
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/medpart_name', $dataPage);
    }


    public function sponsorship()
    {
        $dataProduk = $this->produk_layanan->paginate(15, 'daftar_produk');
        $dataPaket = $this->paket_layanan->findAll();

        $daftar_produk = $this->mapingProdukPaket($dataProduk, $dataPaket);

        $dataPage = [
            'title' => "UriEvent | Sponsorship",
            'daftar_produk' => $daftar_produk,
            'pager' => $this->produk_layanan->pager
        ];

        return view('pages/sponsorship', $dataPage);
    }

    public function medpart()
    {
        $dataProduk = $this->produk_layanan->paginate(15, 'daftar_produk');
        $dataPaket = $this->paket_layanan->findAll();

        $daftar_produk = $this->mapingProdukPaket($dataProduk, $dataPaket);

        $dataPage = [
            'title' => "UriEvent | medpart",
            'daftar_produk' => $daftar_produk,
            'pager' => $this->produk_layanan->pager
        ];

        return view('pages/medpart', $dataPage);
    }

    public function uriservice()
    {
        $dataPage = [
            'title' => "UriEvent | UriService"
        ];
        return view('pages/uriservice', $dataPage);
    }
}
