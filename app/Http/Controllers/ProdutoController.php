<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produto extends Controller
{
    public function index()
    {
        return view('site.produto');
    }
}
