<?php

namespace App\Controllers;

class Hobby extends BaseController
{
    public function index()
    {
        echo view('/templates/header');
        return view('hobby_page');
    }
}
