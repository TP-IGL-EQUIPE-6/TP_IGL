<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moyenne;
use DB;

class MoyenneController extends Controller
{
    public function index()
    {
        //Affichage de la liste de tous les etudiants 
        $etud = etudiant::all();
        return view('marks.index')-> with('etud', $etud) ;
    }

    public function create()
    {
        // afficher le formulaire du choix d'un groupe pour afficher les moyennes des étudiants
        return view ('marks.create');
    }

    // function  getData (récupère les moyennes des étudiants d'un niveau et groupe donnée) 
    public function getData(Request $request)
    {
        // variable varNiveau pour récupèrer le niveau donné par l'utilisateur
        $varNiveau = $request->get('niveau');
        // variable varGrp pour récupèrer le groupe donné par l'utilisateur
        $varGrp = $request->get('grp');
        // sélectionner à partir de la BDD les etudiants dans la tables étudiants qui 
        // répondent au crétereres selectionner par l'utlisateur
        $select = DB:: table('etudiants')
        ->join('moy', 'etudiants.id', '=', 'moy.matricule')
        ->where ([['niveau', $varNiveau], ['grp', $varGrp]])
        ->get();
        // afficher le liste de ces étudiants 
        return view ('marks.getData')->with('student',$select); 
    }

   /* public function listeEtudiant()
    {
        $etudiants = Etudiant::all();
        return view('marks.listeEtudiant', ['etudiants' => $etudiants]);
    } */
}


