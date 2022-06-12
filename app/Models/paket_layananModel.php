<?php

namespace App\Models;

use CodeIgniter\Model;


class paket_layananModel extends Model
{
    protected $table = 'paket_layanan';
    protected $primaryKey = 'id_paket';
    protected $useAutoIncrement = false;
    protected $useTimestamps = true;

    // public function getHargaMin($id)
    // {
    //     return $this->db->get_where('paket_layanan', ['id' => $id])->row_array();
    // }
}
