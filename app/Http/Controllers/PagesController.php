<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        return view ('pages.welcome');
    }

    public function about(){
        return view ('pages.about');
    }

    public function AfficherPlanning(){
        return view ('pages.AfficherPlanning');
    }
}
