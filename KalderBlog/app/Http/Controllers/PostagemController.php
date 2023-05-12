<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostagemController extends Controller
{
    public function postagem(){
        return view ('site.postagem');
    }
}
