<?php

Route:: get ('/', 'PagesController@welcome')->name("peges.welcome");
Route:: get ('/about', 'PagesController@about')->name("peges.about");

// route de l'affichage des moyennes des étudiants
Route:: get('marks', 'MoyenneController@index')->name("marks.index");
Route:: get('/marks/create', 'MoyenneController@create')->name("marks.create");
Route:: get('/marks/getData' , 'MoyenneController@getData')->name("marks.getData");
Route:: get('/marks/listeEtudiant' , 'MoyenneController@listeEtudiant')->name("marks.listeEtudiant");

// route de creation d'un compte étudiant
Route::get('/students/CreerEtudiantForm','EtudiantController@createEtudiant')->name('Etudiant.create');
Route::post('/students/store','EtudiantController@storeEtudiant')->name('Etudiant.store');