<?php

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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('halamandua', function () {
    return view('halamandua');
});
Route::get('future', function () { //disini diisikan nama hrefnya untuk dibuat dibagian linknya
    return view('halamantiga'); // disini diisikan nama filenya
});

Route::get("halaman/tambah","control@tambah");
Route::resource("halaman","control");