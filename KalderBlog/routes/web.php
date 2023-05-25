<?php
use Illuminate\Support\Facades\Route;

//* Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\AutoresController;
use App\Http\Controllers\AutoresManagerController;

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

// Route::get('/', function () {
//     return view('perfilmanager.index');
// });

//* Controllers das Views
Route::get('/',[HomeController::class,'home'])->name('site.home');
Route::get('/about',[AboutController::class,'about'])->name('site.about');
Route::get('/post',[PostagemController::class,'postagem'])->name('site.postagem');
Route::get('/autor',[AutorController::class,'autor'])->name('site.autor');
Route::get('/autores',[AutoresController::class,'autores'])->name('site.autores');

Route::resource('autoresmanager',AutoresManagerController::class);