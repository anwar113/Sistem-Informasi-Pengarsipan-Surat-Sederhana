<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
})->name('home');
route::get('/unggah',function(){
    return view('unggah');
})->name('unggah');
route::get('/lihat',function(){
    return view('lihat');
})->name('lihat');
route::get('about',function(){
    return view('about');
})->name('about');