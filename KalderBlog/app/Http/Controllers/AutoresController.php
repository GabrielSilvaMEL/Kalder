<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutoresController extends Controller
{
    public function autores(){
        $autores = Autor::all();
        return view ('site.autores', compact('autores'));
    }
}
