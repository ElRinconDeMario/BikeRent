<x-layout title="Verificar email">
    <h1>Verifica tu email</h1>
    <p>Antes de continuar, abre el enlace que te hemos enviado por email. Si no te ha llegado, puedes pedir otro.</p>

    @if (session('status') === 'verification-link-sent')
        <x-alert>Te hemos enviado un nuevo enlace de verificación.</x-alert>
    @endif

    <div class="form__actions">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <x-button>Reenviar email de verificación</x-button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="link-button">Cerrar sesión</button>
        </form>
    </div>
</x-layout>
