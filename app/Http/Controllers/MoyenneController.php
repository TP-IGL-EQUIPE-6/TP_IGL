<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moyenne;
use DB;
/**
 * @group Moyenne
 * API pour gerer les moyennes des etudiants
 */
class MoyenneController extends Controller
{
    /**
     * recupere la liste de tous les étudiants a partir de la BDD 
     * et la transmets en paramettre à la vue "marks.index"
     * @return view('marks.index') vue pour afficher la liste des etudiants et la liste des etudiants
     * 
     */
    public function index()
    {
        //Affichage de la liste de tous les etudiants 
        $etud = etudiant::all();
        return view('marks.index')-> with('etud', $etud) ;
    }
    /**
     * retoune une vue du formuaire pour rechercher les moyennes d'un groupe
     * @return view('marks.create') vue du formuaire pour rechercher les moyennes d'un groupe
     */
    public function create()
    {
        return view ('marks.create');
    }

    /**
     * afficher les nom des etudiants et calcul leur moyennes
     * @param request Request contient les informations suivantes:
     * 'niveau': le niveau d'étude 
     * 'grp' int : le numero du groupe
     * @return student un tableau de chaines de caractère 
     */
    //
    public function getData(Request $request)
    {
        $varNiveau = $request->get('niveau');
        $varGrp = $request->get('grp');
        $select = DB:: table('etudiants')
        ->join('moy', 'etudiants.id', '=', 'moy.matricule')
        ->where ([['niveau', $varNiveau], ['grp', $varGrp]])
        ->get();
        return view ('marks.getData')->with('student',$select); 
    }

   /* public function listeEtudiant()
    {
        $etudiants = Etudiant::all();
        return view('marks.listeEtudiant', ['etudiants' => $etudiants]);
    } */
}


