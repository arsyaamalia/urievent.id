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

    public function signIn()
    {
        $session = session();
        $userModel = new UserModel();
        $user_email = $this->request->getVar('user_email');
        $password = $this->request->getVar('password');


        $data = $userModel->where('email_user', $user_email)->orWhere('username_user', $user_email)->first();

        if ($data) {
            $pass = $data['password_user'];
            // $authenticatePassword = password_verify($password, $pass);
            // dd($password, $pass);
            // dd($authenticatePassword);

            if ($password == $pass) {
                $ses_data = [
                    'id_user' => $data['id_user'],
                    'username_user' => $data['username_user'],
                    'email_user' => $data['email_user'],
                    'password_user' => $data['password_user'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
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

    public function resetPass()
    {

        $dataPage = [
            'title' => "Urievent | Forgot Password?",
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('sign/resetPass', $dataPage);
    }
}
