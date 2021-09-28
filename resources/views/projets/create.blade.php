@extends('back')

@section('titre')
    Création d'un projet
@endsection

@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Oups!</strong> Il y a des erreurs dans votre création : <br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card" style="margin:0 5% 5% 5%;">
    <div class="card-body">
        <form method="post" action="{{ route('projets.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre">
                </div>
                <div class="form-group col-md-6">
                    <label for="annee">Année</label>
                    <input type="number" class="form-control" id="annee" name="annee">
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="images">Image(s)</label>
                    <input type="file" class="form-control-file" id="images" name="images[]" multiple>
                </div>
                <div class="form-group col-md-8">
                    <label for="afficher">Afficher</label>
                    <br>
                    <input type="checkbox" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="OUI"
                        data-off="NON" data-size="sm" id="afficher" name="afficher" value="oui" checked>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</div>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'), {
            
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
