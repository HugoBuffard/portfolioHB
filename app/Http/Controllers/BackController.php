<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Message;

class BackController extends Controller
{
    public function index(){
        $projets = Projet::all()->count();
        $projetsAffiches = Projet::where('afficher', true)->count();

        $messages = Message::all()->count();
        $messagesAffiches = Message::where('traiter', true)->count();

        return view('back')
        ->with('projets', $projets)
        ->with('projetsAffiches', $projetsAffiches)
        ->with('messages', $messages)
        ->with('messagesAffiches', $messagesAffiches);
    }
}
