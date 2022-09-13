<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    KategoriController,
    BarangController,
    SupplierController
};

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

Route::get('/', function () {
    return view('home');
});

//route barang
Route::resource('/barang', BarangController::class);
Route::get('/barang/{id}/edit', [BarangController::class, 'edit']);
Route::get('/barang/{id}/hapus', [BarangController::class, 'destroy']);

//route kategori
Route::resource('/kategori', KategoriController::class);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy']);

//route Supplier
Route::resource('/supplier', SupplierController::class);
Route::get('/supplier/{id}/edit', [SupplierController::class, 'edit']);
Route::get('/supplier/{id}/hapus', [SupplierController::class, 'destroy']);

Route::get('/pembeli', function () {
    return view('pembeli.index');
});

Route::get('/pembelian', function () {
    return view('pembelian.index');
});

Route::get('/penjualan', function () {
    return view('penjualan.index');
});