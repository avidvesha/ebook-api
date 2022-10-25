<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HeloController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BookController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('halo', function(){
//     return ['me' => 'Gamteng'];
// });

// Route::get('siswa', [SiswaController::Class, 'index']);

// Route::get('siswa/{id}', [SiswaController::Class, 'show']);

// Route::post('siswa', [SiswaController::Class, 'store']);

// Route::put('siswa/{id}', [SiswaController::Class, 'update']);

// Route::delete('siswa/{id}', [SiswaController::Class, 'destroy']);

Route::resource('siswa', SiswaController::class);
Route::resource('halo', HeloController::class);
Route::resource('books', BookController::class);

