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

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/detailobat', function () {
    return view('detailobat');
});
Route::get('/editobat', function () {
    return view('editobat');
});
Route::get('/transaksi', function () {
    return view('transaksi');
});
Route::get('/tambahobat', function () {
    return view('tambahobat');
});
Route::get('/tambahtransaksi', function () {
    return view('tambahtransaksi');
});
Route::get('/detailpegawai', function () {
    return view('detailpegawai');
});
Route::get('/pegawai', function () {
    return view('pegawai');
});