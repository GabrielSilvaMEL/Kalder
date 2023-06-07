<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function autor($id){
        $autor = Autor::find($id);
        return view ('site.autor', compact('autor'));
    }
}
