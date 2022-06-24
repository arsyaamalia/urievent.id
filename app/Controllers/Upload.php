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


    public function index()
    {
        $dataKategori = $this->kategori_layanan->findAll();
        $dataSubKategori = $this->subkategori_layanan;
        $dataPage = [
            'title' => "UriEvent | Upload Service",
            'dataKategori' => $dataKategori
        ];
        return view('pages/upload', $dataPage);
    }

    public function getDataSubKategori()
    {
        $id_kategori = $this->input->post('id_kategori');
        $dataSubKategori = $this->subkategori_layanan->getDataSubKategori('id_kategori');
        $this->output->set_content_type('application/json')->set_output(json_encode($dataSubKategori));
    }

    public function save()
    {
        $dataProduk = $this->request->getVar('company-name');
        $dataKategori = $this->request->getOption('kategori');

        $dataPaket = $this->paket_layanan->findAll();
        $dataSubKategori = $this->subkategori_layanan->findAll();
    }
}
