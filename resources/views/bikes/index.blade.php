<x-layout title="Catálogo">
    <h1>Catálogo de bicicletas</h1>

    @if ($bikes->isEmpty())
        <p>No hay bicicletas en el catálogo.</p>
    @else
        {{-- Rejilla de tarjetas: 1, 2 o 3 columnas según el ancho de pantalla --}}
        <ul class="grid">
            @foreach ($bikes as $bike)
                <li>
                    <x-bike-card :bike="$bike" />
                </li>
            @endforeach
        </ul>
    @endif
</x-layout>
