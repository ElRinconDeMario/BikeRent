<x-layout title="Registrarse">
    <h1>Crear una cuenta</h1>

    <form class="form" method="POST" action="{{ route('register') }}">
        @csrf

        <x-field label="Nombre" name="name" required autofocus autocomplete="name" />
        <x-field label="Email" name="email" type="email" required autocomplete="username" />
        <x-field label="Contraseña" name="password" type="password" required autocomplete="new-password" />
        <x-field label="Confirmar contraseña" name="password_confirmation" type="password" required autocomplete="new-password" />

        <div class="form__actions">
            <x-button>Registrarse</x-button>
            <a href="{{ route('login') }}">¿Ya tienes cuenta?</a>
        </div>
    </form>
</x-layout>
