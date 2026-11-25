# BikeRent

Aplicación web de alquiler de bicicletas hecha con Laravel (Reto 1, 2º DAW).

## Funcionalidades

- Catálogo público de bicicletas con el detalle de cada una y filtro por tipo.
- Registro e inicio de sesión (Laravel Breeze).
- Reserva de bicicletas con comprobación de fechas, solapamientos y cálculo del precio.
- Sección "Mis reservas" para consultar y cancelar las reservas pendientes.
- Tema claro y oscuro.

## Diseño

El diseño de la interfaz está en Figma: [BikeRent - Diseño](https://www.figma.com/design/j4MQzwJ0jBaYo9KsW50tQe/BikeRent---Dise%C3%B1o)

- **Guía de estilos**: paleta (tema claro y oscuro), tipografía, espaciados, reglas de uso y componentes.
- **Escritorio** y **Móvil**: catálogo, detalle de bicicleta, formulario de reserva y mis reservas.

Los estilos de Figma tienen el mismo nombre que las variables CSS de `resources/css/base.css`.

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
