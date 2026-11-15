@extends('layouts.basic')

@section('content')
    <h1>Bicicletas</h1>

    {{-- Tabla con todas las bicis del catalogo --}}
    <table border="1" cellpadding="5">
        <tr>
            <th>Modelo</th>
            <th>Nº de serie</th>
            <th>Precio/hora</th>
            <th>Estado</th>
            <th></th>
        </tr>
        @forelse ($bikes as $bike)
            <tr>
                <td>{{ $bike->model }}</td>
                <td>{{ $bike->serial_number }}</td>
                <td>{{ $bike->price_per_hour }} €</td>
                <td>{{ $bike->status }}</td>
                <td><a href="{{ route('bikes.show', $bike) }}">Ver</a></td>
            </tr>
        @empty
            <tr><td colspan="5">No hay bicicletas.</td></tr>
        @endforelse
    </table>
@endsection
