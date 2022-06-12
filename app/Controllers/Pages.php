<?php

namespace App\Controllers;

use App\Models\Produk_LayananModel;

class Pages extends BaseController
{
    protected $recom_layanan;
    public function __construct()
    {
        $this->recom_layanan = new Produk_LayananModel;
    }
    public function index()
    // if isset!login paakai return view index, if isset=login = true, return view footer,header, <<homepage>>
    {
        $dataPage = [
            'title' => "Urievent | Homepage",
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $dataPage);
        // return view('pages/home');
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
