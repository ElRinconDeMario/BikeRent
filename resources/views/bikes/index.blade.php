<x-layout title="Catálogo">
    <h1>Catálogo de bicicletas</h1>

    @if ($bikes->isEmpty())
        <p>No hay bicicletas en el catálogo.</p>
    @else
        {{-- Filtro por tipo: lo gestiona resources/js/bike-filter.js sin recargar la página --}}
        <div class="filter">
            <div class="filter__field">
                <label class="filter__label" for="bike-filter">Filtrar por tipo</label>
                <select class="filter__select" id="bike-filter">
                    <option value="">Todos los tipos</option>
                    @foreach ($models as $model)
                        <option value="{{ $model }}">{{ $model }}</option>
                    @endforeach
                </select>
            </div>
            <p class="filter__status" id="bike-filter-status" aria-live="polite">Mostrando {{ $bikes->count() }} de {{ $bikes->count() }} bicicletas</p>
        </div>

        {{-- Rejilla de tarjetas: 1, 2 o 3 columnas según el ancho de pantalla --}}
        <ul class="grid">
            @foreach ($bikes as $bike)
                <li data-model="{{ $bike->model }}">
                    <x-bike-card :bike="$bike" />
                </li>
            @endforeach
        </ul>

        <p class="filter__empty" id="bike-filter-empty" hidden>No hay bicicletas de ese tipo.</p>
    @endif
</x-layout>
