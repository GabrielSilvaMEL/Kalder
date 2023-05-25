<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoresController extends Controller
{
    public function autores(){
        return view ('site.autores');
    }
}
