@props(['title' => null])

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ? $title . ' · ' : '' }}BikeRent</title>

    {{-- Estilos y JavaScript de la aplicación, cargados una sola vez con Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="page">
    <a class="skip-link" href="#contenido">Saltar al contenido</a>

    <header class="header">
        <div class="header__inner container">
            <a class="header__brand" href="{{ route('bikes.index') }}">BikeRent</a>

            {{-- Navegación principal: cambia según haya sesión iniciada o no --}}
            <nav class="header__nav" aria-label="Navegación principal">
                <ul class="header__list">
                    <li><x-nav-link route="bikes.index" active="bikes.*">Bicicletas</x-nav-link></li>
                    @auth
                        <li><x-nav-link route="bookings.index" active="bookings.*">Mis reservas</x-nav-link></li>
                        <li><x-nav-link route="profile.edit">Perfil</x-nav-link></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="link-button">Cerrar sesión</button>
                            </form>
                        </li>
                    @else
                        <li><x-nav-link route="login">Iniciar sesión</x-nav-link></li>
                        <li><x-nav-link route="register">Registrarse</x-nav-link></li>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>

    <main id="contenido" class="main container">
        {{-- Mensajes flash que envían los controladores --}}
        @if (session('success'))
            <x-alert>{{ session('success') }}</x-alert>
        @endif
        @if (session('error'))
            <x-alert type="error">{{ session('error') }}</x-alert>
        @endif

        {{ $slot }}
    </main>

    <footer class="footer">
        <p class="footer__text container">BikeRent · Alquiler de bicicletas</p>
    </footer>
</body>
</html>
