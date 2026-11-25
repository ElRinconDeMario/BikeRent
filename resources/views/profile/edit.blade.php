<x-layout title="Perfil">
    <h1>Perfil</h1>

    {{-- Cada formulario del perfil va en su propia tarjeta --}}
    <div class="stack">
        @include('profile.partials.update-profile-information-form')
        @include('profile.partials.update-password-form')
        @include('profile.partials.delete-user-form')
    </div>
</x-layout>
