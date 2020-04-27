<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PageController extends Controller
{
    
    public function home()
    {
        return view('index');
    }
    public function features()
    {
        return view('features',['nama' => 'Muhammad Zaahid']);
    }
    public function pricing()
    {
        $pricing = Pricing::all();
        return view('pricing');
    }
    public function mahasiswa()
    {

    }
    

}