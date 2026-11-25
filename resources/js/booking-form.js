// Validación de las fechas del formulario de reserva antes de enviarlo
// La validación definitiva y los solapamientos los sigue comprobando el servidor

// Convierte una fecha al formato AAAA-MM-DDTHH:MM que usan los campos datetime-local
function toInputValue(date) {
    const pad = (number) => String(number).padStart(2, '0');

    return `${date.getFullYear()}-${pad(date.getMonth() + 1)}-${pad(date.getDate())}T${pad(date.getHours())}:${pad(date.getMinutes())}`;
}

// Devuelve el mensaje de error de cada campo (cadena vacía si es correcto)
function validateDates(startValue, endValue) {
    const errors = { start: '', end: '' };
    const now = new Date();
    now.setSeconds(0, 0);

    if (startValue === '') {
        errors.start = 'Indica la fecha y hora de inicio.';
    } else if (new Date(startValue) < now) {
        errors.start = 'El inicio no puede ser anterior al momento actual.';
    }

    if (endValue === '') {
        errors.end = 'Indica la fecha y hora de devolución.';
    } else if (startValue !== '' && new Date(endValue) <= new Date(startValue)) {
        errors.end = 'La devolución debe ser posterior al inicio.';
    }

    return errors;
}

// Muestra u oculta el mensaje de error que hay debajo de cada campo
function showError(input, message) {
    const errorElement = document.getElementById(`${input.id}-error`);
    const hasError = message !== '';

    input.classList.toggle('field__input--invalid', hasError);
    input.setAttribute('aria-invalid', String(hasError));

    if (errorElement !== null) {
        errorElement.textContent = message;
        errorElement.hidden = !hasError;
    }
}

// Conecta la validación si estamos en el formulario de reserva
export function initBookingForm() {
    const form = document.querySelector('#booking-form');

    if (form === null) {
        return;
    }

    const startInput = form.querySelector('#start_time');
    const endInput = form.querySelector('#end_time');

    if (startInput === null || endInput === null) {
        return;
    }

    // Con JavaScript activo los mensajes son los nuestros y no los del navegador
    form.noValidate = true;

    // El selector de fecha no deja elegir un inicio pasado ni una devolución anterior al inicio
    startInput.min = toInputValue(new Date());
    startInput.addEventListener('change', () => {
        endInput.min = startInput.value;
    });

    // Al corregir un campo se borra su mensaje de error
    [startInput, endInput].forEach((input) => {
        input.addEventListener('input', () => showError(input, ''));
    });

    form.addEventListener('submit', (event) => {
        const errors = validateDates(startInput.value, endInput.value);
        showError(startInput, errors.start);
        showError(endInput, errors.end);

        if (errors.start !== '' || errors.end !== '') {
            event.preventDefault();
            (errors.start !== '' ? startInput : endInput).focus();
        }
    });
}
