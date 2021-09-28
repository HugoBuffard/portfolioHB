@extends('back')

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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projets as $p)
                        <tr>
                            <th>{{ $p->id }}</th>
                            <td>{{ $p->titre }}</td>
                            <td>{{ $p->annee }}</td>
                            @if ($p->afficher==1)
                            <td><span class="badge badge-success">OUI</span></td>
                            @else
                            <td><span class="badge badge-danger">NON</span></td>
                            @endif
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
