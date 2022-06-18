<?php

namespace App\Models;

use CodeIgniter\Model;


class paket_layananModel extends Model
{
    protected $table = 'paket_layanan';
    protected $primaryKey = 'id_paket';
    protected $useAutoIncrement = false;
    protected $useTimestamps = true;

    public function getDetail($id_layanan = false)
    {
        if ($id_layanan == false) {
            return $this->findAll();
        }

        return $this->where(['id_layanan' => $id_layanan])->findAll();
    }

    public function getMaxMin($id_layanan)
    {
        $this->where(['id_layanan' => $id_layanan])->findAll();
    }
}
