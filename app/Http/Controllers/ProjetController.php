<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Projet;
use App\Models\Image;
use Illuminate\Support\Str;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();
        
        return view('projets.index')->with('projets', $projets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'titre'=>'required',
            'annee'=>'required',
            'description'=>'required',
            'images'=>'required',
          ]);
          if ($validator->fails()) {
            return redirect()->route('projets.create')->withErrors($validator)->withInput();
          }

        $projet = new Projet;
        $projet->titre = $request->input('titre');
        $projet->annee = $request->input('annee');
        $projet->description = $request->input('description');
        if ($request->input('afficher')=="OUI") {
            $projet->afficher = true;
        }
        if ($request->input('afficher')==null) {
            $projet->afficher = false;
        }
        $projet->save();

        foreach ($request->images as $i) {
            $image = new Image;
            $image_upload = $i;
            $rand = Str::random(10);
            if ($image_upload != NULL) {
                $image_nommage = date('Y-m-d') . '-' . $rand . '-' . $image_upload->getClientOriginalName();
                $image_get = 'images/' . $image_nommage;
                $image_upload->move('images', $image_nommage);
                $image->nom = $image_get;
              }
              $image->projet_id = $projet->id;
              $image->save();
        }

        return redirect()->route('projets.index')->with('success', 'Création réussite !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        return view('projets.edit')->with('projet', $projet);
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
        $validator = Validator::make($request->all(),[
            'titre'=>'required',
            'annee'=>'required',
            'description'=>'required',
          ]);
          if ($validator->fails()) {
            return redirect()->route('projets.edit')->withErrors($validator)->withInput();
          }
        
          $projet = Projet::find($id);
          $projet->titre = $request->input('titre');
          $projet->annee = $request->input('annee');
          $projet->description = $request->input('description');

        if ($request->input('afficher')=="OUI") {
            $projet->afficher = true;
        }
        if ($request->input('afficher')==null) {
            $projet->afficher = false;
        }
        $projet->save();

        if (is_array($request->images) || is_object($request->images))
{
        foreach ($request->images as $i) {
            $image = new Image;
            $image_upload = $i;
            $rand = Str::random(10);
            if ($image_upload != NULL) {
                $image_nommage = date('Y-m-d') . '-' . $rand . '-' . $image_upload->getClientOriginalName();
                $image_get = 'images/' . $image_nommage;
                $image_upload->move('images', $image_nommage);
                $image->nom = $image_get;
              }
              $image->projet_id = $projet->id;
              $image->save();
        }
    }
    if (is_array($request->imagesSupp) || is_object($request->imagesSupp))
    {
        foreach ($request->imagesSupp as $iSupp) {
            $imageSupp = Image::find($iSupp);
            unlink(public_path($imageSupp->nom));
            $imageSupp->delete();

        }
    }

        return redirect()->route('projets.index')->with('warning', 'Modification réussite !');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        foreach ($projet->images as $i) {
            if (isset($i->nom)) {
                unlink(public_path($i->nom));
            }
        }
          $projet->delete();

          return redirect()->route('projets.index')->with('danger','Suppression réussite !');
    }
}
