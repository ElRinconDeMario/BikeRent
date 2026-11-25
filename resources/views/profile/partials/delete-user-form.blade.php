<section class="form" aria-labelledby="delete-title">
    <h2 class="form__title" id="delete-title">Eliminar cuenta</h2>
    <p class="form__note">Al eliminar la cuenta se borran también todas tus reservas. Escribe tu contraseña para confirmarlo.</p>

    <form class="form__body" method="POST" action="{{ route('profile.destroy') }}">
        @csrf
        @method('DELETE')

        {{-- Los errores de este formulario van en la bolsa userDeletion --}}
        <x-field label="Contraseña" name="password" id="delete_password" type="password" bag="userDeletion" required autocomplete="current-password" />

        <div class="form__actions">
            <x-button variant="danger">Eliminar cuenta</x-button>
        </div>
    </form>
</section>
