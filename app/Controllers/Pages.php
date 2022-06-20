<?php

namespace App\Controllers;

use App\Models\produk_layananModel;
use App\Models\paket_layananModel;


class Pages extends BaseController
{
    protected $produk_layanan;

    public function __construct()
    {
        $this->produk_layanan = new produk_layananModel();
        $this->paket_layanan = new paket_layananModel();
    }

    public function index()
    // if isset!login paakai return view index, if isset=login = true, return view footer,header, <<homepage>>
    {

        $dataProduk = $this->produk_layanan->paginate(15, 'daftar_produk');
        $dataPaket = $this->paket_layanan->findAll();

        // buat insert array input id layanan
        // // coba sortir array
        // $dataProduk = $this->produk_layanan->findAll();
        // $id_produk = array_column($dataProduk, 'id_layanan');

        // sort($id_produk, SORT_NATURAL | SORT_FLAG_CASE);
        // // get array paling akhir
        // echo end($id_produk);      



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
            'title' => "UriEvent | Advertise With Us",
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/advertise', $dataPage);
    }


    // public function detail()
    // {
    //     $dataPage = [
    //         'title' => "UriEvent | Nama Instansi",
    //         'tes' => ['satu', 'dua', 'tiga']
    //     ];
    //     return view('pages/detail', $dataPage);

    public function search()
    {

        $dataPage = [
            'title' => "UriEvent | Search",
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/search', $dataPage);
    }
}
