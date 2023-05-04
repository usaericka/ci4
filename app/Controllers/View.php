<?php

namespace App\Controllers;

use App\Controllers\FeedbackController;

class View extends BaseController
{
    public function index()
    {
        return view('view_details');
    }
}
