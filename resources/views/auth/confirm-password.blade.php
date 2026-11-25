<x-layout title="Confirmar contraseña">
    <h1>Confirmar contraseña</h1>
    <p>Es una zona protegida: escribe tu contraseña para continuar.</p>

    <form class="form" method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <x-field label="Contraseña" name="password" type="password" required autocomplete="current-password" />

        <div class="form__actions">
            <x-button>Confirmar</x-button>
        </div>
    </form>
</x-layout>
