// Punto de entrada de JavaScript que Vite carga en el layout común
import { initThemeToggle } from './theme-toggle.js';
import { initBikeFilter } from './bike-filter.js';
import { initBookingForm } from './booking-form.js';

// Cada función comprueba si su parte existe en la página antes de hacer nada
initThemeToggle();
initBikeFilter();
initBookingForm();
