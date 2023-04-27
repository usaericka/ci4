<?php

namespace App\Controllers;

class Hobby extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => 'About Me',
        ];
        return view('hobby_page' , $data);
    }
}
