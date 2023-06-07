<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function home(){
        $posts = Post::all();
        return view ('site.home',compact('posts'));
    }
}
