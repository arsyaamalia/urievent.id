<?php

namespace App\Models;

use CodeIgniter\Model;


class paket_layananModel extends Model
{
    protected $table = 'paket_layanan';
    protected $primaryKey = 'id_paket';
    protected $useAutoIncrement = false;
    protected $useTimestamps = true;
}
