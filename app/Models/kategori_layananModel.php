<?php

namespace App\Models;

use CodeIgniter\Model;


class kategori_layananModel extends Model
{
    protected $table = 'kategori_layanan';
    protected $primaryKey = 'id_kategori';
    protected $useAutoIncrement = false;
    protected $useTimestamps = true;

    public function getKategori($id_kategori = false)
    {
        return $this->where(['id_kategori' => $id_kategori])->findAll();
    }
}
