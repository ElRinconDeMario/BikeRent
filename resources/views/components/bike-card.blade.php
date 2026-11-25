@props(['bike'])

{{-- Tarjeta con los datos principales de una bicicleta del catálogo --}}
<article class="card">
    <h2 class="card__title">{{ $bike->model }}</h2>

    <dl class="card__data">
        <x-data-item term="Nº de serie">{{ $bike->serial_number }}</x-data-item>
        <x-data-item term="Precio por hora">{{ $bike->price_per_hour }} €</x-data-item>
        <x-data-item term="Estado"><x-status :status="$bike->status" /></x-data-item>
    </dl>

    <div class="card__actions">
        <x-button variant="secondary" :href="route('bikes.show', $bike)">
            Ver detalle<span class="visually-hidden"> de {{ $bike->model }} {{ $bike->serial_number }}</span>
        </x-button>
    </div>
</article>
