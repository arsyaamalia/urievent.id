<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()

    {
        session()->get('id_user');
        if (isset($_SESSION['id_user'])) {
            return redirect()->to('/pages');
        } else {
            $dataPage = [
                'title' => 'UriEvent | Home'
            ];
            return view('index', $dataPage);
        }
    }

    public function about()
    {
        $dataPage = [
            'title' => "UriEvent | About Us",
        ];
        return view('pages/about', $dataPage);
    }

    public function advertise()
    {
        $dataPage = [
            'title' => "UriEvent | Advertise With Us"
        ];
        return view('pages/advertise', $dataPage);
    }


    public function program()
    {
        $dataPage = [
            'title' => "UriEvent | Program",
        ];
        return view('pages/program', $dataPage);
    }
}
