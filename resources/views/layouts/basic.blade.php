<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>BikeRent</title>
</head>
<body>
    {{-- Menu sencillo que cambia segun si hay sesion o no --}}
    <p>
        <a href="{{ route('bikes.index') }}">Bicicletas</a>
        @auth
            | {{ Auth::user()->name }}
            <form method="POST" action="{{ route('logout') }}" style="display:inline">
                @csrf
                <button type="submit">Cerrar sesión</button>
            </form>
        @else
            | <a href="{{ route('login') }}">Iniciar sesión</a>
            | <a href="{{ route('register') }}">Registrarse</a>
        @endauth
    </p>
    <hr>

    {{-- Mensajes flash de exito o error --}}
    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif
    @if (session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

    @yield('content')
</body>
</html>
