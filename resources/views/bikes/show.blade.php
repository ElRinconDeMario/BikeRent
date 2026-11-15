@extends('layouts.basic')

@section('content')
    <h1>{{ $bike->model }}</h1>

    <p>Nº de serie: {{ $bike->serial_number }}</p>
    <p>Precio por hora: {{ $bike->price_per_hour }} €</p>
    <p>Estado: {{ $bike->status }}</p>

    <p><a href="{{ route('bikes.index') }}">Volver</a></p>
@endsection
