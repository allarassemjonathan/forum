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



// toutes les vues liées aux salons
// se trouve dans le dossier salon
Route::get('/salons', function () {
    return view('salons/salons');
});

         Route::get('salons/salon_discussion', function () {
        return view('salons/salon_discussion');
        });


        Route::get('salons/salon_jeux', function () {
        return view('salons/salon_jeux');
        });
 

        Route::get('/annonces', function () {
            return view('annonces');
        });



//Toutes les vues liées aux departements
// dans le dossie views/departements
Route::get('/departements', function () {
    return view('departements/departements');
});

        Route::get('departements/Jeunesse', function () {
            return view('departements/jeunesse');
        });


        Route::get('departements/Famille', function () {
            return view('departements/famille');
        });


        Route::get('departements/Prière', function () {
            return view('departements/priere');
        });


        Route::get('departements/Hymnologie', function () {
            return view('departements/hymnologie');
        });


        Route::get('departements/Mission', function () {
            return view('departements/mission');
        });


        Route::get('departements/Trésorerie', function () {
            return view('departements/tresorerie');
        });


        Route::get('departements/Sport', function () {
            return view('departements/sport');
        });



// toutes les vues liées au profile
//elles sont dans le dossier views/profile
Route::get('/profile', function () {
    return view('/profile/profile');
});
        
        Route::get('/profile/mes_departements', function () {
            return view('/profile/mdepartements');
        });


        Route::get('/profile/parametres', function () {
            return view('profile/parametres');
        });


        Route::get('/profile/mes_salons', function () {
            return view('profile/msalons');
        });



        Route::get('/profile/mon_role', function () {
            return view('profile/role');
        });




