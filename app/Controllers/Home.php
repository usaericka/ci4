<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('/templates/header');
        echo view('home');
        echo view('/templates/footer');
    }

    public function contact()
    {
        echo view('/templates/headerc');
        return view('contact');
    }
}
