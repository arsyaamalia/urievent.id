<?php

namespace App\Controllers;

use App\Models\kategori_layananModel;
use App\Models\produk_layananModel;
use App\Models\paket_layananModel;
use App\Models\subkategori_layananModel;


class Detail extends BaseController
{
    protected $produk_layanan;
    protected $id_layanan;
    protected $id_subkategori;

    public function __construct()
    {

        $this->produk_layanan = new produk_layananModel();
        $this->paket_layanan = new paket_layananModel();
        $this->kategori_layanan = new kategori_layananModel();
        $this->subkategori_layanan = new subkategori_layananModel();
    }


    public function index($id_layanan, $id_kategori, $id_subkategori)


    {

        $dataProduk = $this->produk_layanan->getDetail($id_layanan);
        $dataPaket = $this->paket_layanan->getDetail($id_layanan);
        $dataKategori = $this->kategori_layanan->getKategori($id_kategori);
        $dataSubKategori = $this->subkategori_layanan->getSubKategori($id_subkategori);
        $similiar = $this->produk_layanan->getSimiliar($id_kategori);



        $dataProduk['step_before'] = explode(',', $dataProduk['step_before']);
        $dataProduk['step_after'] = explode(',', $dataProduk['step_after']);
        // dd($dataProduk['value']);
        if (!empty($dataProduk['value'])) {
            $dataProduk['value'] = explode(',', $dataProduk['value']);
        }
        // dd($dataProduk['value']);

        // dd($step_after);
        // $namaKategori = array_column($dataKategori, 'nama_kategori');
        // $namaSubKategori = array_column($dataSubKategori, 'nama_subkategori');

        // $step_before = array_column($dataProduk, 'step_before');
        // dd($step_before);

        $detail_produk = $dataProduk;
        $daftar_harga = array_column($dataPaket, 'harga_paket');

        if (!empty($daftar_harga)) {
            $detail_produk['harga_max'] = max($daftar_harga);
            $detail_produk['harga_min'] = min($daftar_harga);
        } else {
            $detail_produk['harga_max'] = '0';
            $detail_produk['harga_min'] = '0';
        }

        // dd($dataPaket);
        $dataPage = [
            'title' => "UriEvent | Detail",
            'detail_produk' => $detail_produk,
            'dataKategori' => $dataKategori,
            'dataSubKategori' => $dataSubKategori,
            'dataPaket' => $dataPaket,
            'similiar' => $similiar


        ];
        return view('/detail/detail', $dataPage);
    }
}
