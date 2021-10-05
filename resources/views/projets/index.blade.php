@extends('templateBack')

@section('titre')
    Mes projets
@endsection

@section('content')
    <div class="card" style="margin:0 5% 5% 5%;">
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div id="success" class="alert alert-success">
                    <button onclick="closeSuccess()" type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('danger'))
                <div id="danger" class="alert alert-danger">
                    <button onclick="closeDanger()" type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('warning'))
                <div id="warning" class="alert alert-warning">
                    <button onclick="closeWarning()" type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>
                        <th>Année</th>
                        <th>Afficher</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projets as $p)
                        <tr>
                            <th>{{ $p->id }}</th>
                            <td>{{ $p->titre }}</td>
                            <td>{{ $p->annee }}</td>
                            @if ($p->afficher == 1)
                                <td><span class="badge badge-success">OUI</span></td>
                            @else
                                <td><span class="badge badge-danger">NON</span></td>
                            @endif
                            <td>
                                <div style="display: inline-flex;">
                                    <form action="{{ route('projets.edit', $p) }}" method="post">
                                        @csrf
                                        @method('GET')
                                        <button type="submit" rel="tooltip" class="btn  btn-linght btn-round">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </form>
                                    <form action="{{ route('projets.destroy', $p) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" rel="tooltip" class="btn  btn-linght btn-round"
                                            onclick="return confirm('Es tu sur de vouloir supprimer ce projet ?')">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                }
            });
        });

        function closeSuccess() {
            document.getElementById('success').style.display = 'none';
        }

        function closeDanger() {
            document.getElementById('danger').style.display = 'none';
        }

        function closeWarning() {
            document.getElementById('warning').style.display = 'none';
        }
    </script>
@endsection
