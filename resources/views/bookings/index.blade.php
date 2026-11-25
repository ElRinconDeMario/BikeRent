<x-layout title="Mis reservas">
    <h1>Mis reservas</h1>

    @if ($bookings->isEmpty())
        <p>Todavía no tienes reservas. <a href="{{ route('bikes.index') }}">Ver bicicletas</a></p>
    @else
        {{-- Misma rejilla que el catálogo, con una tarjeta por reserva --}}
        <ul class="grid">
            @foreach ($bookings as $booking)
                <li>
                    <x-booking-card :booking="$booking" />
                </li>
            @endforeach
        </ul>
    @endif
</x-layout>
