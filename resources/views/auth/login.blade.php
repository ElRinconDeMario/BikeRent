<x-layout title="Iniciar sesión">
    <h1>Iniciar sesión</h1>

    {{-- Mensaje tras restablecer la contraseña --}}
    @if (session('status'))
        <x-alert>{{ session('status') }}</x-alert>
    @endif

    <form class="form" method="POST" action="{{ route('login') }}">
        @csrf

        <x-field label="Email" name="email" type="email" required autofocus autocomplete="username" />
        <x-field label="Contraseña" name="password" type="password" required autocomplete="current-password" />

        <label class="checkbox" for="remember_me">
            <input class="checkbox__input" id="remember_me" type="checkbox" name="remember">
            Recordarme
        </label>

        <div class="form__actions">
            <x-button>Entrar</x-button>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">¿Has olvidado tu contraseña?</a>
            @endif
        </div>
    </form>

    <p>¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate</a></p>
</x-layout>
