<?php

namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['id_user', 'nama_user', 'username_user', 'password_user', 'email_user',  'telp_user', 'foto_user', 'domisili_user', 'birthdate_user',  'status'];

    public function getDetail($id_user)
    {
        // return $this->where(['id_user' => $id_user])->findAll();
        return $this->where(['id_user', $id_user])->first();
    }
}
