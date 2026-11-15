@extends('layouts.basic')

@section('content')
    <h1>Mis reservas</h1>

    {{-- Tabla con las reservas del usuario --}}
    <table border="1" cellpadding="5">
        <tr>
            <th>Bici</th>
            <th>Inicio</th>
            <th>Devolución</th>
            <th>Total</th>
            <th>Estado</th>
            <th></th>
        </tr>
        @forelse ($bookings as $booking)
            <tr>
                <td>{{ $booking->bike->model }} ({{ $booking->bike->serial_number }})</td>
                <td>{{ $booking->start_time->format('d/m/Y H:i') }}</td>
                <td>{{ $booking->end_time->format('d/m/Y H:i') }}</td>
                <td>{{ $booking->total_cost }} €</td>
                <td>{{ $booking->status }}</td>
                <td><a href="{{ route('bookings.show', $booking) }}">Ver</a></td>
            </tr>
        @empty
            <tr><td colspan="6">Todavía no tienes reservas.</td></tr>
        @endforelse
    </table>
@endsection
