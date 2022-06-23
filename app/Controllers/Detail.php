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

    public function mapingProdukPaket($dataProduk, $dataPaket)
    {
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

        return $daftar_produk;
    }


    public function index($id_layanan, $id_kategori, $id_subkategori)


    {

        $dataPaket1 = $this->paket_layanan->findAll();
        $dataProduk = $this->produk_layanan->getDetail($id_layanan);
        $dataPaket = $this->paket_layanan->getDetail($id_layanan);
        $dataKategori = $this->kategori_layanan->getKategori($id_kategori);
        $dataSubKategori = $this->subkategori_layanan->getSubKategori($id_subkategori);
        $similiar = $this->produk_layanan->getSimiliar($id_kategori);

        $detailProduk =  $this->mapingProdukPaket($dataProduk, $dataPaket);
        $detail = array_shift($detailProduk);
        $detail['step_before'] = explode(',', $detail['step_before']);
        $detail['step_after'] = explode(',', $detail['step_after']);
        $detail['value'] = explode(',', $detail['value']);

        $daftarSimiliar = $this->mapingProdukPaket($similiar, $dataPaket1);

        $dataPage = [
            'title' => "UriEvent | Detail",
            'dataKategori' => $dataKategori,
            'dataSubKategori' => $dataSubKategori,
            'daftarSimiliar' => $daftarSimiliar,
            'dataPaket' => $dataPaket,
            'detail' => $detail
        ];
        return view('/detail/detail', $dataPage);
    }
}
