@props(['term'])

{{-- Pareja término/valor dentro de una lista de datos (dl) de una tarjeta --}}
<dt class="card__term">{{ $term }}</dt>
<dd class="card__value">{{ $slot }}</dd>
