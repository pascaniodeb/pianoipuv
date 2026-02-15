# PianoIPUV

[![Laravel v12](https://img.shields.io/badge/Laravel-v12-FF2D20?logo=laravel)](https://laravel.com)
[![Livewire v4](https://img.shields.io/badge/Livewire-v4-4E56A6?logo=livewire)](https://livewire.laravel.com)
[![Tailwind CSS v4](https://img.shields.io/badge/Tailwind_CSS-v4-38BDF8?logo=tailwindcss)](https://tailwindcss.com)
[![PHP v8.5](httpsimg.shields.io/badge/PHP-v8.5-777BB4?logo=php)](https://php.net)

PianoIPUV es una plataforma educativa de piano diseñada para enseñar teoría musical, acordes y técnicas de teclado de manera interactiva y accesible.

## Características

- 📚 **Teoría Musical Completa**: Explora construcción de acordes, escalas, inversiones y progresiones
- 🎹 **Visualización Interactiva**: Diagramas de acordes y representaciones visuales del teclado
- 🔍 **Buscador de Acordes**: Encuentra rápidamente cualquier acorde y sus variaciones
- 📱 **Diseño Responsivo**: Optimizado para escritorio y dispositivos móviles
- 🌙 **Modo Oscuro**: Interfaz adaptativa para mayor comodidad visual

## Tecnologías

- **Backend**: Laravel 12 (PHP 8.5)
- **Frontend**: Livewire 4, Alpine.js, Tailwind CSS 4
- **Build**: Vite
- **Testing**: Pest 4

## Requisitos

- PHP 8.5+
- Composer 2+
- Node.js 20+
- SQLite/MySQL/PostgreSQL

## Instalación

```bash
# Clonar el repositorio
git clone https://github.com/pabloascanio/pianoipuv.git
cd pianoipuv

# Instalar dependencias PHP
composer install

# Instalar dependencias npm
npm install

# Configurar entorno
cp .env.example .env
php artisan key:generate

# Ejecutar migraciones
php artisan migrate --force

# Compilar assets
npm run build

# Iniciar servidor de desarrollo
composer run dev
```

## Comandos Útiles

| Comando | Descripción |
|---------|-------------|
| `composer run dev` | Inicia servidor PHP, Vite y logs simultáneamente |
| `npm run build` | Compila assets para producción |
| `php artisan test` | Ejecuta pruebas con Pest |
| `vendor/bin/pint` | Formatea código con Laravel Pint |

## Estructura de Rutas

```
/                   - Página principal
/acorde/{nota}     - Visualización de acorde principal
/acorde/{nota}/{variacion} - Variaciones de acordes
/info/*            - Páginas informativas (acordes, teoría, ejercicios)
```

## Contribución

Las contribuciones son bienvenidas. Por favor, lee el archivo `AGENTS.md` para conocer las convenciones del proyecto.

## Licencia

MIT License - feel free to use this project for educational purposes.

---

Desarrollado con ❤️ por [codeart](https://codedart.dev)
