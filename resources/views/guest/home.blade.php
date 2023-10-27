@extends('layouts.guest')


@section('content')
    <div class="container">
        <div class="d-flex justify-content-center dc-mt">
            <div class="w-50 text-center">
                <h1 class="fw-bold">Il modo migliore per organizzare la tua vita e il tuo lavoro.</h1>
                <p>Aumenta la concentrazione, migliora l'organizzazione e ritrova la calma con Todolist. L'app per la
                    gestione
                    delle attività e delle cose da fare più apprezzata al mondo.</p>
                <a class="btn btn-outline-warning" href="{{ route('register') }}">Registrati Gratis!</a>
            </div>
        </div>
    </div>
@endsection
