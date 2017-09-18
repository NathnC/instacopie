<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.welcome');
    }

    public function login()
    {
        return view('front.login');
    }
}
