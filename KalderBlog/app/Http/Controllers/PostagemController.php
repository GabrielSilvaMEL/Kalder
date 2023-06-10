<?php

// Referências/Dependências
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostagemController extends Controller
{
    public function postagem($id){
        $post = Post::find($id);
        return view ('site.postagem', compact('post'));
    }
}