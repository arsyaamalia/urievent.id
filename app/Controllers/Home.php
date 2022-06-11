<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    // if isset!login paakai return view index, if isset=login = true, return view footer,header, <<home>>
    {
        return view('index');
    }
}
