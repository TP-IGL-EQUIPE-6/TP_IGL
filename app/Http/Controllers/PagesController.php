<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // view de la page home 
    public function welcome(){
        return view ('pages.welcome');
    }

    // view de la page about 
    public function about(){
        return view ('pages.about');
    }
}
