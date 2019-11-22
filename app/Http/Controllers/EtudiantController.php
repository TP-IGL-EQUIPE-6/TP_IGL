<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use DB;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD:app/Http/Controllers/EtudiantController.php
        //Affichage de la liste de tous les etudiants 
=======
        //Affichage liste etudiants 
>>>>>>> sauvegarde de modif:app/Http/Controllers/EtudiantController.php
        $etud = etudiant::all();
        return view('marks.index')-> with('etud', $etud) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('marks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate ($request, [
            'niveau' => 'required',
            'grp' => 'required'
        ]);
        return 1234;
<<<<<<< HEAD:app/Http/Controllers/EtudiantController.php
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
=======
>>>>>>> sauvegarde de modif:app/Http/Controllers/EtudiantController.php
    }

       //function to get data (afficher les nom des etudiants) 
       public function getData(Request $request)
       {
           $varNiveau = $request->get('niveau');
           $varGrp = $request->get('grp');
           $select = DB:: table('etudiants')->where ([['niveau', $varNiveau], ['grp', $varGrp]]) ->get();
           return view ('marks.getData')->with('student',$select); 
       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $moyen = Moy::find($id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

<<<<<<< HEAD:app/Http/Controllers/EtudiantController.php
    public function listeEtudiant()
    {
=======
    public function listeEtudiant(){
>>>>>>> sauvegarde de modif:app/Http/Controllers/EtudiantController.php
        $etudiants = Etudiant::all();
        return view('marks.listeEtudiant', ['etudiants' => $etudiants]);
    }
}
