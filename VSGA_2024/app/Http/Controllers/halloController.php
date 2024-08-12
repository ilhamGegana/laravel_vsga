<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halloController extends Controller
{
    public function hello(){
        return ('hello world');
    }

    public function greeting(){
        return view('blog.hellow')
        ->with('name','Ilham')
        ->with('pekerjaan','mahasiswa');
    }
}

