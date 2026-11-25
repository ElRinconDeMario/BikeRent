<x-layout :title="$bike->model">
    <p><a href="{{ route('bikes.index') }}">Volver al catálogo</a></p>

    <article class="card card--detail">
        <h1 class="card__title">{{ $bike->model }}</h1>

        <dl class="card__data">
            <x-data-item term="Nº de serie">{{ $bike->serial_number }}</x-data-item>
            <x-data-item term="Precio por hora">{{ $bike->price_per_hour }} €</x-data-item>
            <x-data-item term="Estado"><x-status :status="$bike->status" /></x-data-item>
        </dl>

        {{-- Solo se puede reservar si está disponible; sin sesión, el middleware auth manda al login --}}
        <div class="card__actions">
            @if ($bike->status === 'available')
                <x-button :href="route('bookings.create', $bike)">Reservar</x-button>
            @else
                <p class="card__note">Esta bicicleta no está disponible para reservar.</p>
            @endif
        </div>
    </article>
</x-layout>
