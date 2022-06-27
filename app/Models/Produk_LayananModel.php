<?php

namespace App\Models;

use CodeIgniter\Model;


class produk_layananModel extends Model
{
    protected $table = 'produk_layanan';
    protected $primaryKey = 'id_layanan';
    protected $useAutoIncrement = false;
    // protected $useTimestamps = true;
    protected $allowedFields = ['id_layanan', 'id_kategori', 'id_subkategori', 'id_user', 'nama_instansi', 'email_instansi', 'whatsapp', 'instagram', 'picture_poster', 'deskripsi', 'step_before', 'step_after', 'other', 'value', 'status_layanan'];


    public function getDetail($id_layanan = false)
    {
        if ($id_layanan == false) {
            return $this->findAll();
        }

        return $this->where(['id_layanan' => $id_layanan])->findAll();
    }

    public function showUploaded()
    {
        $result = $this->where(['status_layanan' => 'uploaded'])->findAll();
        return $result;
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
