<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengusahaController;
use App\Http\Controllers\PelangganController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/pengusaha', [PengusahaController::class, 'index']);
Route::get('/pengusaha/detail/{id_pengusaha}', [PengusahaController::class, 'detail']);
Route::get('/pelanggan', [PelangganController::class, 'index']);

