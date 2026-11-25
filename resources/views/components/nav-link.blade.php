@props(['route', 'active' => null])

@php
    // El enlace de la página actual se marca en negrita y con aria-current
    $isActive = request()->routeIs($active ?? $route);
@endphp

<a href="{{ route($route) }}" @class(['header__link', 'header__link--active' => $isActive]) @if ($isActive) aria-current="page" @endif>{{ $slot }}</a>
