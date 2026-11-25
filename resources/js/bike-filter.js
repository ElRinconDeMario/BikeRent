// Filtro del catálogo por tipo de bicicleta sobre las tarjetas que ya pinta Blade

// Muestra solo los elementos del tipo elegido y devuelve cuántos quedan visibles
function filterItems(items, model) {
    let visibleCount = 0;

    items.forEach((item) => {
        const matches = model === '' || item.dataset.model === model;
        item.hidden = !matches;

        if (matches) {
            visibleCount += 1;
        }
    });

    return visibleCount;
}

// Actualiza el contador y el aviso de que no hay resultados
function showResult(status, emptyMessage, visibleCount, total) {
    status.textContent = `Mostrando ${visibleCount} de ${total} bicicletas`;
    emptyMessage.hidden = visibleCount !== 0;
}

// Conecta el desplegable del filtro si estamos en el catálogo
export function initBikeFilter() {
    const select = document.querySelector('#bike-filter');
    const status = document.querySelector('#bike-filter-status');
    const emptyMessage = document.querySelector('#bike-filter-empty');

    if (select === null || status === null || emptyMessage === null) {
        return;
    }

    const items = document.querySelectorAll('[data-model]');

    select.addEventListener('change', () => {
        const visibleCount = filterItems(items, select.value);
        showResult(status, emptyMessage, visibleCount, items.length);
    });
}
