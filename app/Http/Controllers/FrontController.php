<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function storeMessage(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nom'=>'required',
            'email'=>'required|email',
            'sujet'=>'required',
            'message'=>'required',
          ]);
          if ($validator->fails()) {
            return response()->json(['status' => 0, 'error' =>$validator->errors()->toArray()]);
          }else {
              $message = new Message;
              $message->nom = $request->input('nom');
              $message->email = $request->input('email');
              $message->sujet = $request->input('sujet');
              $message->message = $request->input('message');
              $message->traiter = false;
              $message->save();
              return response()->json([
                'status'=>1,
                'msg'=>'Votre message à bien été envoyé !',
              ]);
          }
    }
}
