@props(['type' => 'success'])

{{-- Aviso de éxito o error; el role hace que lo anuncien los lectores de pantalla --}}
<div {{ $attributes->class(['alert', 'alert--' . $type]) }} role="{{ $type === 'error' ? 'alert' : 'status' }}">
    {{ $slot }}
</div>
