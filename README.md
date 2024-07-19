<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Sistema de Seguridad Industrial

Este proyecto es una aplicación web desarrollada con Laravel 10 que tiene como objetivo mejorar la gestión de seguridad industrial. La aplicación permite el registro de accidentes, auditorías, fotos, documentos, capacitaciones, comités, dotaciones, insumos, IPER (Identificación de Peligros y Evaluación de Riesgos), maquinaria, mantenimiento de maquinaria, reuniones y trabajadores. Además, ofrece visualización gráfica de los datos y emite notificaciones cuando se terminan los insumos a todos los usuarios registrados en el sistema.

## Características

- Registro de accidentes
- Gestión de auditorías
- Almacenamiento de fotos y documentos
- Gestión de capacitaciones y comités
- Control de dotaciones e insumos
- Identificación de Peligros y Evaluación de Riesgos (IPER)
- Gestión de maquinaria y su mantenimiento
- Programación y registro de reuniones
- Gestión de trabajadores
- Visualización de datos en gráficas
- Emisión de notificaciones para insumos

## Requisitos

- PHP >= 8.1
- Composer
- MySQL o cualquier otra base de datos compatible
- Node.js y npm (para la compilación de activos front-end)

## Instalación

1. Clona este repositorio:

    ```bash
    git clone https://github.com/tu_usuario/tu_repositorio.git
    cd tu_repositorio
    ```

2. Instala las dependencias de PHP con Composer:

    ```bash
    composer install
    ```

3. Instala las dependencias de Node.js:

    ```bash
    npm install
    ```

4. Copia el archivo `.env.example` a `.env` y configura las variables de entorno, incluyendo la conexión a la base de datos:

    ```bash
    cp .env.example .env
    ```

5. Genera la clave de la aplicación:

    ```bash
    php artisan key:generate
    ```

6. Ejecuta las migraciones de la base de datos y los seeders:

    ```bash
    php artisan migrate --seed
    ```

7. Compila los activos front-end:

    ```bash
    npm run dev
    ```

## Uso

1. Inicia el servidor de desarrollo:

    ```bash
    php artisan serve
    ```

2. Accede a la aplicación en tu navegador en la dirección `http://localhost:8000`.

## Estructura del Proyecto

```plaintext
.
├── app/                # Contiene el núcleo de la aplicación
├── bootstrap/          # Contiene los archivos de arranque de Laravel
├── config/             # Contiene los archivos de configuración
├── database/           # Contiene migraciones, factories y seeders
├── public/             # Contiene archivos públicos como index.php y activos front-end
├── resources/          # Contiene vistas, archivos de idioma y activos sin compilar
├── routes/             # Contiene las definiciones de rutas
├── storage/            # Contiene archivos generados, como logs y caché
├── tests/              # Contiene pruebas unitarias y de integración
├── .env.example        # Ejemplo de archivo de configuración de entorno
├── artisan             # Interfaz de línea de comandos de Laravel
├── composer.json       # Archivo de configuración de Composer
├── package.json        # Archivo de configuración de npm
└── webpack.mix.js      # Archivo de configuración de Laravel Mix
