<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $judul = 'Ecoomerce | Eduwork';
        
        return view('home' , compact('judul'));
    }
}
