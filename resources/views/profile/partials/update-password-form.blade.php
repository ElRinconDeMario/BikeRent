<section class="form" aria-labelledby="password-title">
    <h2 class="form__title" id="password-title">Cambiar contraseña</h2>
    <p class="form__note">Usa una contraseña larga y difícil de adivinar.</p>

    <form class="form__body" method="POST" action="{{ route('password.update') }}">
        @csrf
        @method('PUT')

        {{-- Los errores de este formulario van en la bolsa updatePassword --}}
        <x-field label="Contraseña actual" name="current_password" id="update_password_current_password" type="password" bag="updatePassword" autocomplete="current-password" />
        <x-field label="Nueva contraseña" name="password" id="update_password_password" type="password" bag="updatePassword" autocomplete="new-password" />
        <x-field label="Confirmar contraseña" name="password_confirmation" id="update_password_password_confirmation" type="password" bag="updatePassword" autocomplete="new-password" />

        <div class="form__actions">
            <x-button>Guardar</x-button>
            @if (session('status') === 'password-updated')
                <p class="form__note" role="status">Contraseña guardada.</p>
            @endif
        </div>
    </form>
</section>
