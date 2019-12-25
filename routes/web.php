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
Route:: get ('/about', 'PagesController@about');

// route de l'affichage des moyennes des étudiants
Route:: get('marks', 'MoyenneController@index');
Route:: get('/marks/create', 'MoyenneController@create');
Route:: get('/marks/getData' , 'MoyenneController@getData');
Route:: get('/marks/listeEtudiant' , 'MoyenneController@listeEtudiant');

// route de creation d'un compte étudiant
Route::get('/students/CreerEtudiantForm','EtudiantController@createEtudiant')->name('Etudiant.create');
Route::post('/students/store','EtudiantController@storeEtudiant')->name('Etudiant.store');