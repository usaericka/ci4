<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => 'About Me',
        ];
        return view('about_page', $data);
    }

}
