<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => 'Homepage',
        ];
        return view('homepage', $data);
    }


}

