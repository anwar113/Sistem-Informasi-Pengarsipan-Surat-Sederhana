<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratControllers;

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
Route::get('/',[SuratControllers::class,'index'])->name('home');
route::post('store',[SuratControllers::class,'store'])->name('store');
route::get('/lihat_{id}',[SuratControllers::Class,'lihat']);
route::get('/hapus_{id}',[SuratControllers::class,'hapus']);
route::post('cari',[SuratControllers::class,'cari']);
route::get('/download_{file}',[SuratControllers::class,'download'])->name('download');
route::get('/ubah_{id}',[SuratControllers::class,'ubah'])->name('ubah');
route::post('update_{id}',[SuratControllers::class,'update']);

route::get('/unggah',function(){
    return view('unggah');
})->name('unggah');
route::get('about',function(){
    return view('about');
})->name('about');