<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class FrontController extends Controller
{
    public function index(){
        $projets = Projet::where('afficher', true)->get();
        $NbProjets = Projet::all()->count();
        return view('front')
        ->with('projets', $projets)
        ->with('NbProjets', $NbProjets);
    }

    public function ml(){
        return view('mentionsLegales');
    }
}
