<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBaru extends Controller
{
    public function home()
    {
        return view("master");
    }

    public function artikel()
    {
        return view("artikel");
    }
}