@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="d-flex justify-content-center dc-mt">
            <div class=" w-100 text-center">
                <h1 class="fw-bold">Questa è la tua todolist</h1>

                <div class="input-area text-center mt-5">
                    <input class="p-2 border-1 rounded-3 me-5 w-50" type="text" placeholder="Aggiungi una nuova task">

                    <button type="button" class="btn btn-primary mb-2">Aggiungi Task</button>
                </div>
                <div>
                    <span class="text-danger text-center d-none">ERRORE</span>
                </div>

                <div class="dc-container">

                    <ul>
                        <li>
                            <span>CAIO</span>
                            <i class="fa-solid fa-ban text-danger"></i>
                        </li>
                        <li>
                            <span>CAIO</span>
                            <i class="fa-solid fa-ban text-danger"></i>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection
