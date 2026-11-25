@props(['label', 'name', 'type' => 'text', 'value' => null, 'bag' => 'default'])

@php
    // Id del campo y primer error de validación del servidor para este campo
    $id = $attributes->get('id', $name);
    $error = $errors->getBag($bag)->first($name);
@endphp

<div class="field">
    <label class="field__label" for="{{ $id }}">{{ $label }}</label>
    <input
        {{ $attributes->except('id')->class(['field__input', 'field__input--invalid' => $error]) }}
        type="{{ $type }}"
        id="{{ $id }}"
        name="{{ $name }}"
        @if ($type !== 'password') value="{{ old($name, $value) }}" @endif
        aria-describedby="{{ $id }}-error"
        @if ($error) aria-invalid="true" @endif
    >
    {{-- Aquí se muestran los errores del servidor y también los de JavaScript --}}
    <p class="field__error" id="{{ $id }}-error" @if (! $error) hidden @endif>{{ $error }}</p>
</div>
