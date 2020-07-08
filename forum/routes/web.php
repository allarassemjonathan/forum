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




Route::get('/login', function () {
    return view('login');
});

Route::get('/salons', function () {
    return view('salons');
});

         Route::get('/salon_discussion', function () {
        return view('salon_discussion');
        });

        Route::get('/salon_jeux', function () {
        return view('salon_jeux');
        });
 

Route::get('/departements', function () {
    return view('departements');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/annonces', function () {
    return view('annonces');
});






Route::get('/mes_departements', function () {
    return view('mdepartements');
});

Route::get('/parametres', function () {
    return view('parametres');
});


Route::get('/editer', function () {
    return view('editer');
});


Route::get('/mes_salons', function () {
    return view('msalons');
});



Route::get('/mes_salons', function () {
    return view('msalons');
});



Route::get('/mon_role', function () {
    return view('role');
});




