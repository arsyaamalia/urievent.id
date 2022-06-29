<?php

namespace App\Models;

use CodeIgniter\Model;


class subkategori_layananModel extends Model
{
    protected $table = 'subkategori_layanan';
    protected $primaryKey = 'id_subkategori';
    protected $useAutoIncrement = false;
    protected $useTimestamps = true;

    public function getSubKategori($id_subkategori = false)
    {
        return $this->where(['id_subkategori' => $id_subkategori])->first();
    }

    public function getSubKat($id_subkategori)
    {
        return $this->where(['id_subkategori' => $id_subkategori])->first();
    }

    public function getDataSubKategori($id_kategori)
    {
        return $this->where(['id_kategori' => $id_kategori])->findAll();
    }
}
