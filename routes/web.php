<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TokoController;
use App\Models\Testimoni;
use App\Models\Toko;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('halaman-depan', [
        'tokos' => Toko::all(),
        'testimoni' => Testimoni::all()
    ]);
});

// Route::get('/read', function () {
//     return view('crud/read');
// });

Route::get('/outlet/{id}',[TokoController::class, 'outlet']);
Route::get('/hapus-bill/{user_id}', [PendapatanController::class, 'hapus']);

// Landing Page

Route::get('/landing1', function(){
    return view('/landing-page/outlet1');
});
Route::get('/landing2', function(){
    return view('/landing-page/outlet2');
});
Route::get('/landing3', function(){
    return view('/landing-page/outlet3');
});
Route::get('/landing4', function(){
    return view('/landing-page/outlet4');
});
Route::get('/landing5', function(){
    return view('/landing-page/outlet5');
});
Route::get('/landing6', function(){
    return view('/landing-page/outlet6');
});
Route::get('/landing7', function(){
    return view('/landing-page/outlet7');
});
Route::get('/landing8', function(){
    return view('/landing-page/outlet8');
});
// End Landing Page

// Route::get('/namaToko', []);
Route::get('/read', [MenuController::class, 'read']);
Route::get('/create', [MenuController::class, 'create']);
Route::post('/create', [MenuController::class, 'buat']);
Route::get('/edit/{id}', [MenuController::class, 'edit']);
Route::post('/edit', [MenuController::class, 'update']);
Route::get('/delete/{id}/{gambar}', [MenuController::class, 'delete']);
Route::get('/menu', [MenuController::class, 'menu']);

Route::get('/toko', [TokoController::class, 'get']);
Route::post('/toko', [TokoController::class, 'post']);
Route::get('/edit-toko/{id}', [TokoController::class, 'getEdit']);
Route::post('/edit-toko', [TokoController::class, 'postEdit']);
Route::get('/delete-toko/{id}', [TokoController::class, 'delete']);

Route::get('/meja', [MejaController::class, 'get']);
Route::post('/meja', [MejaController::class, 'post']);
Route::get('/edit-meja/{id}', [MejaController::class, 'getEdit']);
Route::post('/edit-meja', [MejaController::class, 'postEdit']);
Route::get('/delete-meja/{id}', [MejaController::class, 'delete']);
Route::post('/pesanan', [PesananController::class, 'pesan']);

Route::get('/nomorMeja', [MenuController::class, 'read']);
Route::get('/modal', [MenuController::class, 'modal']);

Route::post('/testimoni', [TestimoniController::class, 'postTestimoni']);

Route::post('/pendapatan', [PendapatanController::class, 'post']);

Route::get('/home', function () {
    return view('/home');
});

Route::get('/pendapatan', [PendapatanController::class, 'getHasil']);

Route::get('/income', [PendapatanController::class, 'getIncome']);
Route::post('/income', [PendapatanController::class, 'postIncome']);




// Route::get('/create', [BarangController::class, 'create']);
// Route::post('/create', [BarangController::class, 'post']);
// Route::get('/edit/{id}', [BarangController::class, 'edit']);
// Route::post('edit', [BarangController::class, 'update']);
// Route::get('/delete/{id}/{gambar}', [BarangController::class, 'delete']);












// Route::get('/home', 'HomeController@index')->name('home');  //urutannya, URL, Controller, Function
// Route::get('/barang/create', 'BarangController@create');    //create adalah nama functionnya
// Route::post('/barang/create', 'BarangController@post');
// Route::get('/barang/edit/{id}', 'BarangController@edit');
// Route::post('/barang/edit', 'BarangController@update');
// Route::get('/barang/delete/{id}/{gambar}', 'BarangController@delete');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
