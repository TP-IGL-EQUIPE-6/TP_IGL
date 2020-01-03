<?php
/*
les routes 
*/
// routes de l'affichage pages
        // route vers la page Home 
Route:: get ('/', 'PagesController@welcome');
        // route vers al page About 
Route:: get ('/about', 'PagesController@about');

// routes de l'affichage des moyennes des étudiants
        // route vers index
Route:: get('marks', 'MoyenneController@index');
        // route vers le formulaire de sélection de groupe 
Route:: get('/marks/create', 'MoyenneController@create');
        // route vers getData 
Route:: get('/marks/getData' , 'MoyenneController@getData');

// routes de creation d'un compte étudiant
        // route vers le formulaire de création des étudiants 
Route::get('/students/CreerEtudiantForm','EtudiantController@createEtudiant')->name('Etudiant.create');
        // route vers store etudiant
Route::post('/students/store','EtudiantController@storeEtudiant')->name('Etudiant.store');