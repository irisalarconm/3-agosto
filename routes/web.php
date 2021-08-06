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
    return view('index');
});
Route::get('inicio', function () {
    return view('index');
});
Route::get('acerca-de', function () {
    return view('about');
});
Route::get('quienes-somos', function () {
    return view('whoarewe');
});
Route::get('contacto', function () {
    return view('contact');
});
