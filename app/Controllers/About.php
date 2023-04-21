<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        echo view('/templates/header');
        return view('about_page');
    }

}
