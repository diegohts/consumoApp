<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AlbumsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Rota Home 
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

//Rota PostsController metodo index que lista todos posts
Route::get('/posts',[PostsController::class, 'index'])->name('posts');
//Rota PostsController metodo index que lista todos albums
Route::get('/albums',[AlbumsController::class, 'index'])->name('albums');

Route::get('/login', function () {
    return view('login');
});

//Rota alternativa
Route::fallback(function(){
    return "Rota Inexistente (Página não encontrada)!";
});