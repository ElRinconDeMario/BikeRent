<x-layout title="Recuperar contraseña">
    <h1>Recuperar contraseña</h1>
    <p>Escribe tu email y te enviaremos un enlace para elegir una contraseña nueva.</p>

    @if (session('status'))
        <x-alert>{{ session('status') }}</x-alert>
    @endif

    <form class="form" method="POST" action="{{ route('password.email') }}">
        @csrf

        <x-field label="Email" name="email" type="email" required autofocus />

        <div class="form__actions">
            <x-button>Enviar enlace</x-button>
        </div>
    </form>
</x-layout>
