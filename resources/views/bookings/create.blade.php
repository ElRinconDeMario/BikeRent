@extends('layouts.basic')

@section('content')
    <h1>Reservar {{ $bike->model }}</h1>
    <p>Precio por hora: {{ $bike->price_per_hour }} €</p>

    {{-- Errores de validacion --}}
    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {{-- Formulario con las fechas de inicio y devolucion --}}
    <form method="POST" action="{{ route('bookings.store') }}">
        @csrf
        <input type="hidden" name="bike_id" value="{{ $bike->id }}">

        <p>
            <label>Inicio:</label>
            <input type="datetime-local" name="start_time" value="{{ old('start_time') }}">
        </p>
        <p>
            <label>Devolución:</label>
            <input type="datetime-local" name="end_time" value="{{ old('end_time') }}">
        </p>

        <button type="submit">Confirmar reserva</button>
    </form>

    <p><a href="{{ route('bikes.show', $bike) }}">Volver</a></p>
@endsection
