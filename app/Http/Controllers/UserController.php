<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function riwayat()
    {
        return view('riwayat');
    }

    public function proccess()
    {
        return view('proccess');
    }
}