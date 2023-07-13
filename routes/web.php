<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\laporanController;
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

Route::get('/home', function () {
    return view('home');
});

// pelanggan
Route::get('/pelanggan',[pelangganController::class,'index']);
Route::get('/addPelanggan',[pelangganController::class,'create']);
Route::post('/storePelanggan',[pelangganController::class,'store']);
Route::get('/editPelanggan/{id}',[pelangganController::class,'edit']);
Route::post('/updatePelanggan/{id}',[pelangganController::class,'update']);
Route::get('/hpsPelanggan/{id}',[pelangganController::class,'delete']);
// end pelanggan

// produk
Route::get('/produk',[produkController::class,'index']);
Route::get('/addProduk',[produkController::class,'create']);
Route::post('/storeProduk',[produkController::class,'store']);
Route::get('/editProduk/{id}',[produkController::class,'edit']);
Route::post('/updateProduk/{id}',[produkController::class,'update']);
Route::get('/hpsProduk/{id}',[produkController::class,'destroy']);


// end produk


// all transaksi
Route::get('/penjualan',[transaksiController::class,'penjualan_index']);
Route::post('/storeEntriPesan',[transaksiController::class,'penjualan_store']);
Route::get('/detilPesan/{id}',[transaksiController::class,'detail']);
Route::post('/storeDetilPesan/{id}',[transaksiController::class,'storeDetail']);

// end

// faktur
Route::get('/faktur',[transaksiController::class,'faktur_index']);
Route::post('/storeFaktur',[transaksiController::class,'faktur_store']);

//

// kuitansi

Route::get('kuitansi',[transaksiController::class,'kuitansi_index']);
Route::post('/storeKuitansi',[transaksiController::class,'kuitansi_store']);

// laporan

Route::get('/laporanTanggal', [laporanController::class,'laporanTanggal']);
Route::post('/tanggal',[laporanController::class,'filter']);
Route::get('/laporanPelanggan',[laporanController::class,'laporanPelanggan']);
Route::post('/filterPelanggan',[laporanController::class,'filterPelanggan']);
Route::post('/filterProduk',[laporanController::class,'filterProduk']);
Route::get('/laporanProduk', [laporanController::class,'laporanProduk']);
