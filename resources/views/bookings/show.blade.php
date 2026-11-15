@extends('layouts.basic')

@section('content')
    <h1>Reserva #{{ $booking->id }}</h1>

    <p>Bici: {{ $booking->bike->model }} ({{ $booking->bike->serial_number }})</p>
    <p>Inicio: {{ $booking->start_time->format('d/m/Y H:i') }}</p>
    <p>Devolución: {{ $booking->end_time->format('d/m/Y H:i') }}</p>
    <p>Total: {{ $booking->total_cost }} €</p>
    <p>Estado: {{ $booking->status }}</p>

    {{-- Boton de cancelar, solo si la reserva sigue pendiente --}}
    @if ($booking->status === 'pending')
        <form method="POST" action="{{ route('bookings.cancel', $booking) }}">
            @csrf
            @method('PATCH')
            <button type="submit">Cancelar reserva</button>
        </form>
    @endif

    <p><a href="{{ route('bookings.index') }}">Volver</a></p>
@endsection
