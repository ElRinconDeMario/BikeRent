<x-layout :title="'Reservar ' . $bike->model">
    <h1>Reservar {{ $bike->model }}</h1>
    <p>Nº de serie {{ $bike->serial_number }} · {{ $bike->price_per_hour }} € por hora</p>

    {{-- Error general del servidor sobre la bicicleta elegida --}}
    @error('bike_id')
        <x-alert type="error">{{ $message }}</x-alert>
    @enderror

    {{-- Formulario con las fechas de inicio y devolución --}}
    <form id="booking-form" class="form" method="POST" action="{{ route('bookings.store') }}">
        @csrf
        <input type="hidden" name="bike_id" value="{{ $bike->id }}">

        <x-field label="Inicio" name="start_time" type="datetime-local" required />
        <x-field label="Devolución" name="end_time" type="datetime-local" required />

        <p class="form__note">El precio final se calcula al confirmar la reserva.</p>

        <div class="form__actions">
            <x-button>Confirmar reserva</x-button>
            <a href="{{ route('bikes.show', $bike) }}">Volver</a>
        </div>
    </form>
</x-layout>
