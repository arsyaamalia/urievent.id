<?php

namespace App\Models;

use CodeIgniter\Model;


class produk_layananModel extends Model
{
    protected $table = 'produk_layanan';
    protected $primaryKey = 'id_layanan';
    protected $useAutoIncrement = false;
    protected $useTimestamps = true;


    public function getDetail($id_layanan = false)
    {
        if ($id_layanan == false) {
            return $this->findAll();
        }

        return $this->where(['id_layanan' => $id_layanan])->first();
    }

    public function getSimiliar($id_kategori)
    {
        return $this->where(['id_kategori' => $id_kategori])->findAll();
    }

    public function search($cari)
    {
        return $this->table('produk_layanan')->like('nama_instansi', $cari);

        // ->orLike('nama_instansi',$cari)
    }
}
