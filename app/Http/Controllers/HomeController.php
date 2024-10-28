<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index'); //ini merujuk ke halaman index.blade.php
    }

    public function login(){
        return view('login'); //ini merujuk ke halaman login.blade.php
    }

    public function about(){
        $data = [
            'name' => 'Muhammad Jordan Wibisono Soebroto',
            'school' => 'SMK Telkom Purwokerto',
            'email' => 'soebrotojordan@gmail.com'
        ];
        return view('about', $data); //ini merujuk ke halaman login.blade.php
    }
}
