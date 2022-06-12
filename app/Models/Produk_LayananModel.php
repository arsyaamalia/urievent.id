<?php

namespace App\Models;

use CodeIgniter\Model;


class Produk_LayananModel extends Model
{
    protected $table = 'produk_layanan';
    protected $primaryKey = 'id_layanan';
    protected $useAutoIncrement = false;
    protected $useTimestamps = true;
}
