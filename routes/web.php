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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route:: get ('/', 'PagesController@welcome');
Route:: get ('/about', 'PagesController@AfficherPlanning');
Route:: get ('/AfficherPlanning', 'PagesController@about');

Route:: get('note', 'EtudiantController@index');
Route:: get('/note/store', 'EtudiantController@store');
Route:: get('/note/create', 'EtudiantController@create');
//<<<<<<< HEAD
Route:: get('/note/update', 'EtudiantController@update');
//=======
//>>>>>>> sauvegarde de modif
Route:: get('/note/getData' , 'EtudiantController@getData');
Route:: get('/note/listeEtudiant' , 'EtudiantController@listeEtudiant');

//Route :: resource('note', 'EtudiantController');
Route::get('/Etudiant/Creer','EtudiantController@createEtudiant')->name('creerEtudaint');