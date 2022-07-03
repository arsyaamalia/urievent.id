<?php

namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{
    protected $table = 'user';
    // protected $primaryKey = 'id_user';
    protected $allowedFields = ['id_user', 'nama_user', 'username_user', 'email_user', 'password_user'];

    public function getDetail($id_user)
    {
        // return $this->where(['id_user' => $id_user])->findAll();
        return $this->where(['id_user', $id_user])->first();
    }
}
