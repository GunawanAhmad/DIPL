<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukDataController;
use App\Http\Controllers\ProdukSMSController;
use App\Http\Controllers\ProdukTelController;
use App\Http\Controllers\RegisterController;
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






Route::get('/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index'])->name('admin.register');
Route::post('/register', [RegisterController::class, 'register']);


Route::group(['middleware' => ['auth:admin']], function() {
    Route::get('/admin', [DashboardController::class, 'admin']);

    Route::get('/tambah-data', [ProdukDataController::class, 'tambah_data_view']);
    Route::post('/tambah-data', [ProdukDataController::class, 'create']);

    Route::get('/tambah-tel', [ProdukTelController::class, 'tambah_tel_view']);
    Route::post('/tambah-tel', [ProdukTelController::class, 'create']);

    Route::get('/tambah-sms', [ProdukSMSController::class, 'tambah_sms_view']);
    Route::post('/tambah-sms', [ProdukSMSController::class, 'create']);
});