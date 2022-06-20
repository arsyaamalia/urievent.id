<?php

namespace App\Controllers;

use App\Models\kategori_layananModel;
use App\Models\produk_layananModel;
use App\Models\paket_layananModel;
use App\Models\subkategori_layananModel;


class Similiar extends BaseController
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


    public function detail($id_layanan, $id_kategori, $id_subkategori)


    {

        $dataPaket1 = $this->paket_layanan->findAll();
        $dataProduk1 = $this->paket_layanan->findAll();
        $dataProduk = $this->produk_layanan->getDetail($id_layanan);
        $dataPaket = $this->paket_layanan->getDetail($id_layanan);
        $dataKategori = $this->kategori_layanan->getKategori($id_kategori);
        $dataSubKategori = $this->subkategori_layanan->getSubKategori($id_subkategori);
        $similiar = $this->produk_layanan->getSimiliar($id_kategori);


        $daftar_similiar = array_map(function ($produk) use ($dataPaket1) {
            $daftar_paket = array_filter($dataPaket1, function ($paket) use ($produk) {
                // dd($paket, $produk);
                return $paket['id_layanan'] == $produk['id_layanan'];
            });
            $produk['paket'] = $daftar_paket;
            // dd($produk);

            $daftar_harga = array_column($daftar_paket, 'harga_paket');

            if (!empty($daftar_harga)) {
                $produk['harga_max'] = max($daftar_harga);
                $produk['harga_min'] = min($daftar_harga);
            } else {
                $produk['harga_max'] = '0';
                $produk['harga_min'] = '0';
            }

            return $produk;
        }, $dataProduk1);




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
        $daftar_harga = array_column($dataPaket1, 'harga_paket');

        if (!empty($daftar_harga)) {
            $detail_produk['harga_max'] = max($daftar_harga);
            $detail_produk['harga_min'] = min($daftar_harga);
        } else {
            $detail_produk['harga_max'] = '0';
            $detail_produk['harga_min'] = '0';
        }

        $dataPage = [
            'title' => "UriEvent | Detail",
            'detail_produk' => $detail_produk,
            'dataKategori' => $dataKategori,
            'dataSubKategori' => $dataSubKategori,
            'dataPaket' => $dataPaket,
            'similiar' => $similiar,
            'daftar_similiar' => $daftar_similiar
        ];
        return view('/detail/detail', $dataPage);
    }
}
