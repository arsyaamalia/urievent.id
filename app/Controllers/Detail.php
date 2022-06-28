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
    protected $paket_layanan;

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
        $detail['step_before'] = explode('__', $detail['step_before']);
        $detail['step_after'] = explode('__', $detail['step_after']);
        $detail['value'] = explode('__', $detail['value']);

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

    public function detailpribadi($id_layanan, $id_kategori, $id_subkategori)
    {
        $dataProduk = $this->produk_layanan->getDetail($id_layanan);
        $dataPaket = $this->paket_layanan->getDetail($id_layanan);
        $dataKategori = $this->kategori_layanan->getKategori($id_kategori);
        $dataSubKategori = $this->subkategori_layanan->getSubKategori($id_subkategori);

        $detailProduk = $this->mapingProdukPaket($dataProduk, $dataPaket);

        $detail = array_shift($detailProduk);
        $detail['step_before'] = explode('__', $detail['step_before']);
        $detail['step_after'] = explode('__', $detail['step_after']);
        $detail['value'] = explode('__', $detail['value']);

        $dataPage = [
            'title' => "UriEvent | Detail",
            'detail' => $detail,
            'dataKategori' => $dataKategori,
            'dataSubKategori' => $dataSubKategori
        ];
        return view('/detail/detailpribadi', $dataPage);
    }

    // public function deletePaket($id_layanan)
    // {
    //     return 
    // }

    public function delete($id_layanan)
    {
        $this->produk_layanan->delete($id_layanan);
        // $this->paket_layanan->delete($id_layanan);
        // produk layanan udah kedelete tapi paketnya belum
        return redirect()->to('/pages/uriservice');
    }
}
