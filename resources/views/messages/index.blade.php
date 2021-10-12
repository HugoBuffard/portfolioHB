@extends('templateBack')

@section('titre')
    Mes messages
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
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Sujet</th>
                        <th>Traiter</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $m)
                        <tr>
                            <th>{{ $m->id }}</th>
                            <td>{{ $m->nom }}</td>
                            <td>{{ $m->email }}</td>
                            <td>{{ $m->sujet }}</td>
                            @if ($m->traiter == 1)
                                <td><span class="badge badge-success">OUI</span></td>
                            @else
                                <td><span class="badge badge-danger">NON</span></td>
                            @endif
                            <td>
                                <div style="display: inline-flex;">
                                    <form action="{{ route('messages.edit', $m->id) }}" method="post">
                                        @csrf
                                        @method('GET')
                                        <button type="submit" rel="tooltip" class="btn  btn-linght btn-round">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </form>
                                    <form action="{{ route('messages.destroy', $m) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" rel="tooltip" class="btn  btn-linght btn-round"
                                            onclick="return confirm('Es tu sur de vouloir supprimer ce message ?')">
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
