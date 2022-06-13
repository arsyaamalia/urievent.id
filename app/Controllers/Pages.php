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

        $dataProduk = $this->produk_layanan->findAll();
        $dataPaket = $this->paket_layanan->findAll();
        $daftar_produk = array_map(function ($produk) use ($dataPaket) {
            $daftar_paket = array_filter($dataPaket, function ($paket) use ($produk) {
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
            'title' => "Urievent | Homepage",
            'daftar_produk' => $daftar_produk,
        ];

        return view('pages/home', $dataPage);
        // return view('pages/home');
    }

    public function getHargaMin($id_layanan)

    {
    }

    public function about()
    {
        $dataPage = [
            'title' => "Urievent | About Us",
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/about', $dataPage);
    }
}
