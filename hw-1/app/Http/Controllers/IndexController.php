<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function login()
    {
        return view('index/login');
    }
    public function index()
    {
        return view('index/dashboard');
    }

}


