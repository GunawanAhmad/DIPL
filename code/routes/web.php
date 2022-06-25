<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
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





//admin routes
Route::get('/login/admin', [LoginController::class, 'index_admin'])->name('admin.login');
Route::post('/login/admin', [LoginController::class, 'login_admin']);

Route::get('/register/admin', [RegisterController::class, 'index_admin'])->name('admin.register');
Route::post('/register/admin', [RegisterController::class, 'register_admin']);


Route::group(['middleware' => ['auth:admin']], function() {
    Route::get('/admin', [DashboardController::class, 'admin']);

    Route::get('/tambah-data', [ProdukDataController::class, 'tambah_data_view']);
    Route::post('/tambah-data', [ProdukDataController::class, 'create']);

    Route::get('/tambah-tel', [ProdukTelController::class, 'tambah_tel_view']);
    Route::post('/tambah-tel', [ProdukTelController::class, 'create']);

    Route::get('/tambah-sms', [ProdukSMSController::class, 'tambah_sms_view']);
    Route::post('/tambah-sms', [ProdukSMSController::class, 'create']);
});



//user routes
Route::get('/login/user', [LoginController::class, 'index_user'])->name('user.login');
Route::post('/login/user', [LoginController::class, 'login_user']);

Route::get('/register/user', [RegisterController::class, 'index_user'])->name('user.register');
Route::post('/register/user', [RegisterController::class, 'register_user']);

Route::group(['middleware' => ['auth:web']], function() {
    Route::get('/user', [DashboardController::class, 'user']);
    Route::post('/user/logout', [LoginController::class, 'logout_user']);
    Route::get('/user/daftar-produk', [DashboardController::class, 'daftarProduk']);
    Route::get('user/pembayaran/data/{id}', [PembayaranController::class, 'index_data']);
    Route::get('user/pembayaran/tel/{id}', [PembayaranController::class, 'index_tel']);
    Route::get('user/pembayaran/sms/{id}', [PembayaranController::class, 'index_sms']);
    Route::post('user/pembayaran/data/{id}', [PembayaranController::class, 'bayar_data'])->middleware('auth');
    Route::post('user/pembayaran/tel/{id}', [PembayaranController::class, 'bayar_tel'])->middleware('auth');
    Route::post('user/pembayaran/sms/{id}', [PembayaranController::class, 'bayar_sms'])->middleware('auth');
});