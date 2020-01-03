<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use DB;
/**
 * @group Etudiant
 * API pour gérer les étudiants
 */

class EtudiantController extends Controller
{
    /**
     * createEtudiant()
     * Afficher le formulaire de creation d'un nouvel étudiant 
     * @return view('students.CreerEtudiantForm') la vue du formulaire de creation d'un nouvel etudiant
     */
    public function createEtudiant(){
        return view('students.CreerEtudiantForm');
    }

    /**
     *  storeEtudiant()
     * Sauvgarder les données récuperer à partir du formulaire de creation d'un étudiant
     *  dans la table <<etudiants>> de la DB et se redirger vers la page d'acceuil 
     * @param request Request contient les informations suivantes:
     * @bodyParam id int l'idantifiant de l'etudiant. No-example
     * @bodyParam nom String required le nom de l'etudiant. Example: BAIBA
     * @bodyParam prenom String required le prenom de l'etudiant. Example: Loubna
     * @bodyParam niveau String required le niveau de l'etudiant. Example: 1CS
     * @bodyParam section String required la section de l'etudiant. Example: B
     * @bodyParam grp int required  le groupe de l'etudiant. Example: 9
     * @return view('pages.welcome') vue de la page d'acceuil
     */
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

