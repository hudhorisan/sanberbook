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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@home');

Route::get('/register', 'AuthController@regis');

Route::post('/congrat', 'AuthController@regis_post');

Route::get('/master', function () {
    return view('adminlte.master');
});

Route::get('/master/content', function () {
    return view('adminlte.content');
});

Route::get('/tugas', function () {
    return view('tugas.tabel');
});

Route::get('/tugas/data-tables', function () {
    return view('tugas.tabeldata');
});
