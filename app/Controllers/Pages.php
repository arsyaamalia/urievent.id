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
        $recom_layanan = $this->produk_layanan->findAll();
        $paket_layanan = $this->paket_layanan->findAll();


        $dataPage = [
            'title' => "Urievent | Homepage",
            'recom_layanan' => $recom_layanan,
            // 'harga_min' => $id_layanan
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
