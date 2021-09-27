@extends('back')

@section('titre')
Création d'un projet
@endsection

@section('content')
<div class="card-body">
<form>
    
    <div class="form-group">
        <label for="inputCity">Titre</label>
        <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group">
        <label for="inputCity">Description</label>
        <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group">
        <label for="inputCity">Année</label>
        <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Image(s)</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" multiple>
    </div>
    <div class="form-group">
        <label for="inputCity">Afficher</label>
        <input type="text" class="form-control" id="inputCity">
    </div>
    <button type="submit" class="btn btn-primary">Créer</button>
  </form>
    </div>

@endsection