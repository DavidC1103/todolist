@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="d-flex justify-content-center dc-mt">
            <div class=" w-100 text-center">
                <h1 class="fw-bold">Questa è la tua todolist</h1>

                @if (session('deleted'))
                    <span class="text-success">
                        {{ session('deleted') }}
                    </span>
                @endif

                <form action="{{ route('admin.todos.store') }}" method="POST">
                    @csrf
                    <div class="input-area text-center mt-5">
                        <input class="p-2 border-1 rounded-3 me-5 w-50" type="text" name="title"
                            placeholder="Aggiungi una nuova task">

                        <button type="submit" class="btn btn-primary mb-2">Aggiungi Task</button>
                    </div>
                    <div>
                        <span class="text-danger text-center d-none">ERRORE</span>
                    </div>
                </form>

                <div class="dc-container">
                    <div class="dc-container2 d-flex justify-content-between px-4 py-3">
                        <div class="fs-3">Titolo</div>
                        <div class="fs-3">Data</div>
                        <div class="fs-3">Azioni</div>
                    </div>
                    <ul>
                        @foreach ($todos as $todo)
                            <li>
                                <span>{{ $todo->title }}</span>

                                <form action="{{ route('admin.todos.destroy', $todo) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><i class="fa-solid fa-ban text-danger"></i></button>
                                </form>

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
