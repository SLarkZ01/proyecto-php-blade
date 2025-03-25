@extends('layout')

@section('title', 'Ejemplos de Foreach')

@section('content')
    <div class="container mt-4">
        <h1>Ejemplos de Foreach en PHP y Blade</h1>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Ejemplo 1: Array Simple</h2>
            </div>
            <div class="card-body">
                <p>{{ $resultadoFrutas }}</p>
                <ul>
                    @foreach($frutas as $fruta)
                        <li>{{ $fruta }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Ejemplo 2: Array Asociativo</h2>
            </div>
            <div class="card-body">
                <p>{{ $resultadoPrecios }}</p>
                <ul>
                    @foreach($precios as $fruta => $precio)
                        <li>{{ $fruta }}: ${{ $precio }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Ejemplo 3: Lista de Personas</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Edad</th>
                                <th>Rol</th>
                                <th>Información</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($personas as $persona)
                                <tr>
                                    <td>{{ $persona->getNombre() }}</td>
                                    <td>{{ $persona->getEdad() }}</td>
                                    <td>{{ $persona->getRol() }}</td>
                                    <td>{{ $persona->obtenerInformacion() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection