// Cambio entre tema claro y oscuro con una clase en <html> (no se guarda la preferencia)
const DARK_CLASS = 'theme--dark';

// Pone en el botón la acción disponible según el tema activo
function updateButtonText(button, isDark) {
    button.textContent = isDark ? 'Activar tema claro' : 'Activar tema oscuro';
}

// Conecta el botón de tema si existe en la página
export function initThemeToggle() {
    const button = document.querySelector('[data-theme-toggle]');

    if (button === null) {
        return;
    }

    const root = document.documentElement;
    updateButtonText(button, root.classList.contains(DARK_CLASS));

    button.addEventListener('click', () => {
        const isDark = root.classList.toggle(DARK_CLASS);
        updateButtonText(button, isDark);
    });
}
