<?php

namespace App\Controllers;

use App\Models\UserModel;

class Sign extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('sign/signIn');
    }

    public function __construct()
    {
        $this->UserModel = new UserModel();
        // $this->produk_layanan = new produk_layananModel();

    }

    public function signIn()
    {
        $session = session();
        $userModel = new UserModel();
        $user_email = $this->request->getVar('user_email');
        $password = $this->request->getVar('password');
        $data = $userModel->where('email_user', $user_email)->orWhere('username_user', $user_email)->first();

        if ($data) {
            $pass = $data['password_user'];
            if ($password == $pass) {
                $ses_data = [
                    'id_user' => $data['id_user'],
                    'nama_user' => $data['nama_user'],
                    'username_user' => $data['username_user'],
                    'email_user' => $data['email_user'],
                    'password_user' => $data['password_user'],
                    'foto_user' => $data['foto_user'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                // dd($user_username);
                // $session->set('username', $ses_data['username_user']);
                return redirect()->to('/pages');
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/sign');
            }
        } else {
            $session->setFlashdata('msg', 'Username or Email does not exist.');
            return redirect()->to('/sign');
        }
    }

    public function signUp()
    {
        $dataPage = [
            'title' => "Urievent | Sign Up",
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('sign/signUp', $dataPage);
    }

    //validasi sign up
    public function save()
    {
        $userModel = new UserModel();
        $new_username = $this->request->getVar('username');
        //cek username unik
        $data = $userModel->where('username_user', $new_username)->first();
        if (!$data) {
            // aman
            $temp = $userModel->orderBy('id_user', 'desc')->first();
            // dd($temp);
            $id_user_str = explode('u', $temp['id_user']);
            // dd($id_user_str);
            $new_id_user = intval(end($id_user_str));
            // dd($new_id_user);
            $new_id_user = $new_id_user + 1;
            // dd($new_id_user);
            $new_id_user_str = (string) $new_id_user;
            // dd($new_id_user_str);

            //cek length string
            if (strlen($new_id_user_str) == 1) {
                $new_id_user_str = 'u00' . $new_id_user_str;
            } else if (strlen($new_id_user_str) == 2) {
                //puluhan
                $new_id_user_str = 'u0' . $new_id_user_str;
            } else {
                //ratusan
                $new_id_user_str = 'u' . $new_id_user_str;
            }
            // dd($new_id_user_str);

            $this->UserModel->save([
                // 'id_user' => $this->request->getVar($new_id_user_str),
                'id_user' => $new_id_user_str,

                'nama_user' => $this->request->getVar('nama'),
                'email_user' => $this->request->getVar('email'),
                'password_user' => $this->request->getVar('password'),
                'username_user' => $this->request->getVar('username')
            ]);
        } else {
            // gak aman

        }
        return redirect()->to('/sign');
    }

    public function resetPass()
    {

        $dataPage = [
            'title' => "Urievent | Forgot Password?"
        ];
        return view('sign/resetPass', $dataPage);
    }

    public function signOut()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function getImageUser($fileImage, $product = null)
    {
        if ($fileImage->getError() == 4) {
            return ($product != null) ? $product['image'] : null;
        }

        $fileName = $fileImage->getRandomName();
        $fileImage->move('img/foto_user', $fileName);


        if ($product != null && $product['image'] != 'product-default.jpg') {
            unlink('img/foto_user' . $product['image']);
        }

        return $fileName;
    }

    public function editProfile()
    {
        $userModel = new UserModel();
        $id_user = session()->get('id_user');
        $dataUser = $userModel->where('id_user', $id_user)->first();
        $dataPage = [
            'title' => "Urievent | Edit Profile",
            'dataUser' => $dataUser
        ];
        return view('sign/editprofile', $dataPage);
    }

    function saveEditGen()
    {
        $userModel = new UserModel();

        // $id_user = session()->get('id_user');
        $dataUser = $this->request->getVar();
        $dataUser = [
            'username_user' => $this->request->getVar('user-username'),
            'email_user' => $this->request->getVar('user-email'),
        ];
        $userModel->save($dataUser);
    }
}
