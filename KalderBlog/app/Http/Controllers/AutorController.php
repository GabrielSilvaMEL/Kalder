<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function autor(){
        return view ('site.autor');
    }
}
