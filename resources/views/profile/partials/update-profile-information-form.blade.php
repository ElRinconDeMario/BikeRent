<section class="form" aria-labelledby="profile-info-title">
    <h2 class="form__title" id="profile-info-title">Datos de la cuenta</h2>
    <p class="form__note">Actualiza tu nombre y tu email.</p>

    {{-- Formulario aparte para reenviar el email de verificación --}}
    <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form class="form__body" method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PATCH')

        <x-field label="Nombre" name="name" :value="$user->name" required autocomplete="name" />
        <x-field label="Email" name="email" type="email" :value="$user->email" required autocomplete="username" />

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <p class="form__note">
                Tu email no está verificado.
                <button form="send-verification" class="link-button">Reenviar email de verificación</button>
            </p>

            @if (session('status') === 'verification-link-sent')
                <x-alert>Te hemos enviado un nuevo enlace de verificación.</x-alert>
            @endif
        @endif

        <div class="form__actions">
            <x-button>Guardar</x-button>
            @if (session('status') === 'profile-updated')
                <p class="form__note" role="status">Datos guardados.</p>
            @endif
        </div>
    </form>
</section>
