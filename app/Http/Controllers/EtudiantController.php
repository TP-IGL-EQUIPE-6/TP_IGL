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

    public function save(){
       return "saved correctly"; 
    }

    public function update(){

    }

    // Sauvgarder les données récuperer à partir du formulaire de creation d'un étudiant
    // dans la table <<etudiants>> de la DB et se redirger vers la page d'acceuil 
    public function storeEtudiant(Request $request)
    {
        //remplissage de la table etudiant
        $e = new Etudiant();
        $e->id= $request->id;
        $e->nom= $request->nom;
        $e->prenom= $request->prenom;
        $e->niveau= $request->niveau;
        $e->section= $request->section;
        $e->grp= $request->grp;
        $e->save();
        return view('pages.welcome');
    }

    
}




