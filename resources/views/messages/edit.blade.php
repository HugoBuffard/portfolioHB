@extends('templateBack')

@section('titre')
    Message :
@endsection

@section('content')
    <div class="card card-widget" style="margin:0 5% 5% 5%;">
        <div class="card-header">
            <div class="user-block">
                <img class="img-circle" src="{{ asset('back/dist/img/icon-message.jpeg') }}">
                <span class="username">{{ $message->nom }}</span>
                <span class="description">{{ $message->email }}</span>
            </div>
        </div>
        <div class="card-body">
            <p><b>{{ $message->sujet }}</b></p>
            <p>{{ $message->message }}</p>
            <form method="post" action="{{ route('messages.update', $message->id) }}">
                @csrf
                @method('PUT')
                @if ($message->traiter == true)
                    <input type="checkbox" data-toggle="toggle" data-onstyle="success" data-offstyle="danger"
                        data-on="OUI" data-off="NON" data-size="sm" id="traiter" name="traiter" value="OUI"
                        checked>
                @endif
                @if ($message->traiter == false)
                    <input type="checkbox" data-toggle="toggle" data-onstyle="success" data-offstyle="danger"
                        data-on="OUI" data-off="NON" data-size="sm" id="traiter" name="traiter" value="OUI">
                @endif
                <br><br>
                <button type="submit" class="btn btn-primary">Traiter</button>
            </form>
        </div>
    </div>
@endsection