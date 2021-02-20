<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcaoController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('home.index');
    }

    public function adm(){
        return view('');
    }
}
