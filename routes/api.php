<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\TokoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Menu;
use App\Http\Controllers\MenuController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// cara membuat route di api jangan sampai membutuhkan Auth / login
// logikanya kita akses api ga harus login, traveloka akses api garuda tidak perlu login

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/outlet/{id}', [TokoController::class, 'coba']);

Route::post('/create_menu', [ApiController::class, 'apibuat']);
Route::get('/lihat_menu', [ApiController::class, 'apimenu']);
Route::post('/edit_menu', [ApiController::class, 'apiedit']);
Route::delete('hapus_menu/{id}', [ApiController::class, 'apidelete']);
