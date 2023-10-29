@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="d-flex justify-content-center dc-mt">
            <div class=" w-100 text-center">
                <h1 class="fw-bold">Ciao {{ ucfirst(Auth::user()->name) }} questa è la tua todolist</h1>


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

                @if (session('deleted'))
                    <span id="alert-message" class="text-success fs-3">
                        {{ session('deleted') }}
                    </span>
                @endif
                @if (session('added'))
                    <span id="alert-message" class="text-success fs-3">
                        {{ session('added') }}
                    </span>
                @endif

                <div class="dc-container">
                    @if ($todos->isEmpty())
                        <span class="fs-3">Non ci sono Task da fare </span>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-start ps-3 py-3">Titolo</th>
                                    <th scope="col" class="text-start py-3">Aggiunto il</th>
                                    <th scope="col" class="py-3">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($todos as $todo)
                                    <tr>
                                        <td class="text-start ps-3 py-3">{{ $todo->title }}</td>
                                        <td class="text-start py-3">{{ $todo->date }}</td>
                                        <td class="py-3">
                                            <form action="{{ route('admin.todos.destroy', $todo) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="custom-btn"><i
                                                        class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
