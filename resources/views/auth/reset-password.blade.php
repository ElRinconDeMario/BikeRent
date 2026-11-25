<x-layout title="Nueva contraseña">
    <h1>Nueva contraseña</h1>

    <form class="form" method="POST" action="{{ route('password.store') }}">
        @csrf

        {{-- Token del enlace recibido por email --}}
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <x-field label="Email" name="email" type="email" :value="$request->email" required autofocus autocomplete="username" />
        <x-field label="Contraseña" name="password" type="password" required autocomplete="new-password" />
        <x-field label="Confirmar contraseña" name="password_confirmation" type="password" required autocomplete="new-password" />

        <div class="form__actions">
            <x-button>Cambiar contraseña</x-button>
        </div>
    </form>
</x-layout>
