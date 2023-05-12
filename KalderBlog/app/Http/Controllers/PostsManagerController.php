<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class PostsManagerController extends Controller
{
    // * INDEX ---------------------------------|
    public function index()
    {
        $post = Post::latest()->paginate(5);

        return view('postsmanager.index',compact('posts'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // * CREATE ---------------------------------|
    public function create()
    {
        $autores = Autor::all();
        $locais = Local::all();
        return view('showsmanager.create', compact('autores'));
    }
}
