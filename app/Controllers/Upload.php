<?php

namespace App\Controllers;

class Upload extends BaseController
{


    public function index()
    {

        $dataPage = [
            'title' => "UriEvent | Upload Service",
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/upload', $dataPage);
    }

    public function save()
    {
        $dataProduk = $this->request->getVar('company-name');
        dd($dataProduk);
        $dataPaket = $this->paket_layanan->findAll();
        $dataKategori = $this->kategori_layanan->findAll();
        $dataSubKategori = $this->subkategori_layanan->findAll();
    }
}
