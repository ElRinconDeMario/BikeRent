@extends('layouts.basic')

@section('content')
    <h1>{{ $bike->model }}</h1>

    <p>Nº de serie: {{ $bike->serial_number }}</p>
    <p>Precio por hora: {{ $bike->price_per_hour }} €</p>
    <p>Estado: {{ $bike->status }}</p>

    {{-- Solo se puede reservar si esta disponible; sin sesion, el middleware auth manda al login --}}
    @if ($bike->status === 'available')
        <a href="{{ route('bookings.create', $bike) }}">Reservar</a>
    @else
        <p>Esta bicicleta no está disponible.</p>
    @endif

    <p><a href="{{ route('bikes.index') }}">Volver</a></p>
@endsection
