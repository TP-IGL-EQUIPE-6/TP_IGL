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
        return view ('marks.create');
    }

    //function to get data (afficher les nom des etudiants et calcul leur moyennes) 
    public function getData(Request $request)
    {
        $varNiveau = $request->get('niveau');
        $varGrp = $request->get('grp');
        $select = DB:: table('etudiants')
        ->join('moy', "etudiants.id", '=', 'moy.matricule')
        ->where ([['niveau', $varNiveau], ['grp', $varGrp]])
        ->get();
        return view ('marks.getData')->with('student',$select); 
    }


    public function listeEtudiant()
    {
        $etudiants = Etudiant::all();
        return view('marks.listeEtudiant', ['etudiants' => $etudiants]);
    }
}
