<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/divisi', function () {
    return view('divisi');
});

Route::get('/arsip', function () {
    return view('arsip');
});

Route::get('/proker', function () {
    return view('proker');
});

Route::get('/artikel', function () {
    return view('artikel');
});
