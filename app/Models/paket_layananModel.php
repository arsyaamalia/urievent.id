<?php

namespace App\Models;

use CodeIgniter\Model;


class paket_layananModel extends Model
{
    protected $table = 'paket_layanan';
    protected $primaryKey = 'id_paket';
    protected $useAutoIncrement = false;
    // protected $useTimestamps = true;
    protected $allowedFields = ['id_paket', 'id_layanan', 'nama_paket', 'deskripsi_paket', 'harga_paket'];


    public function getDetail($id_layanan = false)
    {

        return $this->where(['id_layanan' => $id_layanan])->findAll();
    }

    // public function getMaxMin($id_layanan)
    // {
    //     $this->where(['id_layanan' => $id_layanan])->findAll();
    // }

}
