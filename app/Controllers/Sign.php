<?php

namespace App\Controllers;

class Sign extends BaseController
{
    public function index()
    {
        $dataPage = [
            'title' => "Urievent | Sign In",
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('sign/signIn', $dataPage);
    }

    public function signIn()
    {
        $dataPage = [
            'title' => "Urievent | Sign In",
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('sign/signIn', $dataPage);
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
