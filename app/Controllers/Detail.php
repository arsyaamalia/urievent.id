<?php

namespace App\Controllers;

use App\Models\produk_layananModel;
use App\Models\paket_layananModel;
use App\Models\subkategori_layananModel;


class Detail extends BaseController
{
    protected $produk_layanan;


    public function __construct()
    {
        $this->produk_layanan = new produk_layananModel();
        $this->paket_layanan = new paket_layananModel();
        $this->subkategori_layanan = new subkategori_layananModel();
    }


    public function index($id_layanan)

    {
        // echo ($id_layanan);
        $produk_layanan = $this->produk_layanan->getDetail($id_layanan);
        // dd($produk);

        $dataPage = [
            'title' => "UriEvent | Detail",
            'produk' => $produk_layanan
        ];
        return view('/detail/detail', $dataPage);
    }
}
