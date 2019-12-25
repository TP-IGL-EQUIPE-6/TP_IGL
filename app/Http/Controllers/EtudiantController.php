<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use DB;

class EtudiantController extends Controller
{
    public function createEtudiant(){
        return view('marks.CreerEtudiantForm');
    }
    // Sauvgarder les données récuperer à partir du formulaire de creation d' un compte étudiant
    // dans la table <<create_etudiant_table>> de la DB et se redirger vers la page d'acceuil 

    public function storeEtudiant(Request $request){
        //remplissage de la table users
        $user = new User();
        $user->name=$request->nom;
        $user->email=$request->email;
        $user->password= $request->pwd;
        $user->save();
        //remplissage de la table etudiant
        $e = new Etudiant();
        $e->nom= $request->nom;
        $e->prenom= $request->prenom;
        $e->matricule= $user->id;
        $e->niveau= $request->niveau;
        $e->section= $request->section;
        $e->grp= $request->grp;
        $e->save();
        return view('pages.welcome');
    }
}

