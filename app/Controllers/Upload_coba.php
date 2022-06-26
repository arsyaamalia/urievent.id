<?php

namespace App\Controllers;

use App\Models\kategori_layananModel;
use App\Models\produk_layananModel;
use App\Models\paket_layananModel;
use App\Models\subkategori_layananModel;

class Upload_coba extends BaseController
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
        return view('pages/upload1', $dataPage);
    }

    public function getDataSubKategori($id_kategori)
    {
        // $id_kategori = $this->input->post('id_kategori');
        $dataSubKategori = $this->subkategori_layanan->getDataSubKategori($id_kategori);
        // dd($id_kategori);
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
        $dataProduk = $this->request->getVar();
        dd($dataProduk);
    }
}
