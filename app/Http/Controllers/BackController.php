<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class BackController extends Controller
{
    public function index(){
        $projets = Projet::all()->count();
        $projetsAffiches = Projet::where('afficher', true)->count();

        return view('back')
        ->with('projets', $projets)
        ->with('projetsAffiches', $projetsAffiches);
    }
}
