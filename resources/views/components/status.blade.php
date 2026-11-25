@props(['status'])

@php
    // Texto en español y tipo de color de cada estado de bicicleta o de reserva
    $states = [
        'available' => ['Disponible', 'positive'],
        'maintenance' => ['En mantenimiento', 'neutral'],
        'retired' => ['Retirada', 'negative'],
        'pending' => ['Pendiente', 'neutral'],
        'active' => ['Activa', 'positive'],
        'completed' => ['Completada', 'positive'],
        'cancelled' => ['Cancelada', 'negative'],
    ];
    [$label, $type] = $states[$status] ?? [$status, 'neutral'];
@endphp

<span class="status status--{{ $type }}">{{ $label }}</span>
