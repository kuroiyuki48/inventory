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



Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index'])->name('barang');
Route::post('/barang/data', [App\Http\Controllers\BarangController::class, 'data'])->name('barang-data');
Route::get('/barang/form/{id?}', [App\Http\Controllers\BarangController::class, 'form'])->name('barang-form');
Route::post('/barang/save/{id?}', [App\Http\Controllers\BarangController::class, 'save'])->name('barang-save');
Route::get('/barang/delete/{id?}', [App\Http\Controllers\BarangController::class, 'delete'])->name('barang-delete');


Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('pelanggan');
Route::post('/pelanggan/data', [App\Http\Controllers\PelangganController::class, 'data'])->name('pelanggan-data');
Route::get('/pelanggan/form/{id?}', [App\Http\Controllers\PelangganController::class, 'form'])->name('pelanggan-form');
Route::post('/pelanggan/save/{id?}', [App\Http\Controllers\PelangganController::class, 'save'])->name('pelanggan-save');
Route::get('/pelanggan/delete/{id?}', [App\Http\Controllers\PelangganController::class, 'delete'])->name('pelanggan-delete');


Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'index'])->name('supplier');
Route::post('/supplier/data', [App\Http\Controllers\SupplierController::class, 'data'])->name('supplier-data');
Route::get('/supplier/form/{id?}', [App\Http\Controllers\SupplierController::class, 'form'])->name('supplier-form');
Route::post('/supplier/save/{id?}', [App\Http\Controllers\SupplierController::class, 'save'])->name('supplier-save');
Route::get('/supplier/delete/{id?}', [App\Http\Controllers\SupplierController::class, 'delete'])->name('supplier-delete');


Route::get('/barang_masuk', [App\Http\Controllers\BarangMasukController::class, 'index'])->name('barang_masuk');
Route::post('/barang_masuk/data', [App\Http\Controllers\BarangMasukController::class, 'data'])->name('barang_masuk-data');
Route::get('/barang_masuk/form/{id?}', [App\Http\Controllers\BarangMasukController::class, 'form'])->name('barang_masuk-form');
Route::post('/barang_masuk/save/{id?}', [App\Http\Controllers\BarangMasukController::class, 'save'])->name('barang_masuk-save');
Route::get('/barang_masuk/delete/{id?}', [App\Http\Controllers\BarangMasukController::class, 'delete'])->name('barang_masuk-delete');


Route::get('/barang_masuk_detail', [App\Http\Controllers\BarangMasukDetailController::class, 'index'])->name('barang_masuk_detail');
Route::post('/barang_masuk_detail/data', [App\Http\Controllers\BarangMasukDetailController::class, 'data'])->name('barang_masuk_detail-data');
Route::get('/barang_masuk_detail/form/{id?}', [App\Http\Controllers\BarangMasukDetailController::class, 'form'])->name('barang_masuk_detail-form');
Route::post('/barang_masuk_detail/save/{id?}', [App\Http\Controllers\BarangMasukDetailController::class, 'save'])->name('barang_masuk_detail-save');
Route::get('/barang_masuk_detail/delete/{id?}', [App\Http\Controllers\BarangMasukDetailController::class, 'delete'])->name('barang_masuk_detail-delete');


Route::get('/barang_keluar', [App\Http\Controllers\BarangKeluarController::class, 'index'])->name('barang_keluar');
Route::post('/barang_keluar/data', [App\Http\Controllers\BarangKeluarController::class, 'data'])->name('barang_keluar-data');
Route::get('/barang_keluar/form/{id?}', [App\Http\Controllers\BarangKeluarController::class, 'form'])->name('barang_keluar-form');
Route::post('/barang_keluar/save/{id?}', [App\Http\Controllers\BarangKeluarController::class, 'save'])->name('barang_keluar-save');
Route::get('/barang_keluar/delete/{id?}', [App\Http\Controllers\BarangKeluarController::class, 'delete'])->name('barang_keluar-delete');


Route::get('/barang_keluar_detail', [App\Http\Controllers\BarangKeluarDetailController::class, 'index'])->name('barang_keluar_detail');
Route::post('/barang_keluar_detail/data', [App\Http\Controllers\BarangKeluarDetailController::class, 'data'])->name('barang_keluar_detail-data');
Route::get('/barang_keluar_detail/form/{id?}', [App\Http\Controllers\BarangKeluarDetailController::class, 'form'])->name('barang_keluar_detail-form');
Route::post('/barang_keluar_detail/save/{id?}', [App\Http\Controllers\BarangKeluarDetailController::class, 'save'])->name('barang_keluar_detail-save');
Route::get('/barang_keluar_detail/delete/{id?}', [App\Http\Controllers\BarangKeluarDetailController::class, 'delete'])->name('barang_keluar_detail-delete');
