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
//Route:: get ('/AfficherPlanning', 'PagesController@about');

Route:: get('marks', 'EtudiantController@index');
Route:: get('/marks/store', 'EtudiantController@store');
Route:: get('/marks/create', 'EtudiantController@create');
Route:: get('/marks/getData' , 'EtudiantController@getData');
Route:: get('/marks/listeEtudiant' , 'EtudiantController@listeEtudiant');

//Route :: resource('note', 'EtudiantController');
  