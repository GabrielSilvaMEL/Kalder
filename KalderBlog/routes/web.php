<?php

/* Referências */
use Illuminate\Support\Facades\Route;

    // Referências dos Controllers das Views
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\AutoresController;

    // Referências dos Controllers das CRUDS
use App\Http\Controllers\AutoresManagerController;
use App\Http\Controllers\PostsManagerController;

/* Controllers */
    // Controllers das Views
Route::get('/',[HomeController::class,'home'])->name('site.home');
Route::get('/about',[AboutController::class,'about'])->name('site.about');
Route::get('/post/{id}', [PostagemController::class, 'postagem'])->name('site.postagem');
Route::get('/autor/{id}',[AutorController::class,'autor'])->name('site.autor');
Route::get('/autores',[AutoresController::class,'autores'])->name('site.autores');

    // Controllers das CRUDS
Route::resource('autoresmanager',AutoresManagerController::class);
Route::resource('postsmanager',PostsManagerController::class);