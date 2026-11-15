# BikeRent

Aplicación web de alquiler de bicicletas hecha con Laravel (Reto 1, 2º DAW).

## Funcionalidades

- Catálogo público de bicicletas con el detalle de cada una.
- Registro e inicio de sesión (Laravel Breeze).
- Reserva de bicicletas con comprobación de fechas, solapamientos y cálculo del precio.
- Sección "Mis reservas" para consultar y cancelar las reservas pendientes.

## Puesta en marcha (Laravel Sail)

```bash
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate --seed
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

La aplicación queda disponible en http://localhost.

## Ramas

- `main`: versión estable.
- `develop`: integración de las funcionalidades.
- `feature/*`: una rama por funcionalidad, que se integra en `develop` mediante Pull Request.
