@props(['booking'])

{{-- Tarjeta con el resumen de una reserva del usuario --}}
<article class="card">
    <h2 class="card__title">{{ $booking->bike->model }} ({{ $booking->bike->serial_number }})</h2>

    <dl class="card__data">
        <x-data-item term="Inicio">{{ $booking->start_time->format('d/m/Y H:i') }}</x-data-item>
        <x-data-item term="Devolución">{{ $booking->end_time->format('d/m/Y H:i') }}</x-data-item>
        <x-data-item term="Total">{{ $booking->total_cost }} €</x-data-item>
        <x-data-item term="Estado"><x-status :status="$booking->status" /></x-data-item>
    </dl>

    <div class="card__actions">
        <x-button variant="secondary" :href="route('bookings.show', $booking)">
            Ver detalle<span class="visually-hidden"> de la reserva {{ $booking->id }}</span>
        </x-button>
    </div>
</article>
