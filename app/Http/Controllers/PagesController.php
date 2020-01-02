<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * @group Pages
 * API pour gérer le pages
 */
class PagesController extends Controller
{
    /**
     * retoune une vue de la page d'accueil
     * @return view('pages.welcome') vue de la page d'accueil
     */
    public function welcome(){
        return view ('pages.welcome');
    }
    /**
     * retoune une vue de la page d'apropos
     * @return view('pages.about') vue de la page d'apropos
     */
    public function about(){
        return view ('pages.about');
    }
    /**
     * retoune une vue de la page d'affichage du planning
     * @return view('pages.AfficherPlanning') vue de la page d'affichage du planning
     */
    public function AfficherPlanning(){
        return view ('pages.AfficherPlanning');
    }
}
