@extends('templateBack')

@section('titre')
    Modification d'un projet
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
            <form method="post" action="{{ route('projets.update', $projet->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="titre">Titre</label>
                        <input type="text" class="form-control" id="titre" name="titre" value="{{ $projet->titre }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="annee">Année</label>
                        <input type="number" class="form-control" id="annee" name="annee" value="{{ $projet->annee }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description"
                        name="description">{{ $projet->description }}</textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="images">Ajout d'image(s)</label>
                        <input type="file" class="form-control-file" id="images" name="images[]" multiple>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="afficher">Afficher</label>
                        <br>
                        @if ($projet->afficher == true)
                            <input type="checkbox" data-toggle="toggle" data-onstyle="success" data-offstyle="danger"
                                data-on="OUI" data-off="NON" data-size="sm" id="afficher" name="afficher" value="OUI"
                                checked>
                        @endif
                        @if ($projet->afficher == false)
                            <input type="checkbox" data-toggle="toggle" data-onstyle="success" data-offstyle="danger"
                                data-on="OUI" data-off="NON" data-size="sm" id="afficher" name="afficher" value="OUI">
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    @foreach ($projet->images as $i)
                        <div class="col-3">
                            <img src="{{ asset($i->nom) }}" class="img-thumbnail m-2" style="height: 164px;width:254px;">
                            <br>
                            <div class="text-center" style="margin-left:20%;">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$i->id}}" name="imagesSupp[]">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Modifier</button>
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
