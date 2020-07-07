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
    return view('welcome');
});



Route::get('/home', function () {
    return view('home');
});



Route::get('/login', function () {
    return view('login');
});




Route::get('/profile', function () {
    return view('profile');
});




Route::get('/parametres', function () {
    return view('parametres');
});


Route::get('/editer', function () {
    return view('editer');
});


Route::get('/salon', function () {
    return view('salon');
});

Route::get('/mes_salons', function () {
    return view('msalons');
});

Route::get('/salon_discussion', function () {
    return view('salon_discussion');
});


Route::get('/salon_jeux', function () {
    return view('salon_jeux');
});

Route::get('/mes_salons', function () {
    return view('msalons');
});