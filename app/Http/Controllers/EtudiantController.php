<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use DB;

class EtudiantController extends Controller
{
    public function createEtudiant(){
        return view('students.CreerEtudiantForm');
    }

    public function update(){

    }

    // Sauvgarder les données récuperer à partir du formulaire de creation d'un étudiant
    // dans la table <<etudiants>> de la DB et se redirger vers la page d'acceuil 
    public function storeEtudiant(Request $request)
    {
        // remplissage de la table etudiant
        $e = new Etudiant();
        // champs id
        $e->id= $request->id;
        // champs nom
        $e->nom= $request->nom;
        // champs prenom
        $e->prenom= $request->prenom;
        // champs niveau
        $e->niveau= $request->niveau;
        // champs section 
        $e->section= $request->section;
        // champs groupe 
        $e->grp= $request->grp;
        // save 
        $e->save();
        // retourner vers la page home 
        return view('pages.welcome');
    }

    
}

