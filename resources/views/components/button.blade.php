@props(['variant' => 'primary', 'href' => null])

{{-- Botón reutilizable: con href se pinta como enlace con aspecto de botón --}}
@if ($href)
    <a href="{{ $href }}" {{ $attributes->class(['button', 'button--' . $variant]) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->merge(['type' => 'submit'])->class(['button', 'button--' . $variant]) }}>{{ $slot }}</button>
@endif
