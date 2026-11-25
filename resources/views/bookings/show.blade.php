<x-layout :title="'Reserva ' . $booking->id">
    <p><a href="{{ route('bookings.index') }}">Volver a mis reservas</a></p>

    <article class="card card--detail">
        <h1 class="card__title">Reserva #{{ $booking->id }}</h1>

        <dl class="card__data">
            <x-data-item term="Bicicleta">{{ $booking->bike->model }} ({{ $booking->bike->serial_number }})</x-data-item>
            <x-data-item term="Inicio">{{ $booking->start_time->format('d/m/Y H:i') }}</x-data-item>
            <x-data-item term="Devolución">{{ $booking->end_time->format('d/m/Y H:i') }}</x-data-item>
            <x-data-item term="Total">{{ $booking->total_cost }} €</x-data-item>
            <x-data-item term="Estado"><x-status :status="$booking->status" /></x-data-item>
        </dl>

        {{-- Botón de cancelar, solo mientras la reserva siga pendiente --}}
        @if ($booking->status === 'pending')
            <form class="card__actions" method="POST" action="{{ route('bookings.cancel', $booking) }}">
                @csrf
                @method('PATCH')
                <x-button variant="danger">Cancelar reserva</x-button>
            </form>
        @endif
    </article>
</x-layout>
