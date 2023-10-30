@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Verifica la tua email</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        <div>
                        </div> Prima di procedere, controlla la tua email, ti è stato inviato un link per verificare il tuo
                        account. Se non hai ricevuto il link
                        <form class="d-inline" method="GET" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">clicca qui per richiederne
                                un'altro</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
