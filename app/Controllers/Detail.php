<?php

namespace App\Controllers;

class Detail extends BaseController
{
    public function detail()
    // if isset!login paakai return view index, if isset=login = true, return view footer,header, <<home>>
    {
        $dataPage = [
            'title' => "UriEvent | Detail",
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('/detail/detail', $dataPage);
    }
}
