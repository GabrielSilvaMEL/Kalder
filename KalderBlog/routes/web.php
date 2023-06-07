<?php
use Illuminate\Support\Facades\Route;

//* Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\AutoresController;
use App\Http\Controllers\AutoresManagerController;
use App\Http\Controllers\PostsManagerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//* Controllers das Views
Route::get('/',[HomeController::class,'home'])->name('site.home');
Route::get('/about',[AboutController::class,'about'])->name('site.about');
Route::get('/post/{id}', [PostagemController::class, 'postagem'])->name('site.postagem');
Route::get('/autor/{id}',[AutorController::class,'autor'])->name('site.autor');
Route::get('/autores',[AutoresController::class,'autores'])->name('site.autores');

//* Controllers das CRUDS
Route::resource('autoresmanager',AutoresManagerController::class);
Route::resource('postsmanager',PostsManagerController::class);