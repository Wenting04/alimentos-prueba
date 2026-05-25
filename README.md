# 🍏 Web Alimentos (Laravel)

Este proyecto es una aplicación web desarrollada en **Laravel** que permite a los usuarios autenticados consultar información detallada y dinámica sobre diferentes tipos de alimentos (aceite, carne, harina, huevo, leche, pescado).

---

## 👥 Integrantes del Proyecto

* Pengyu Ye
* Qixian Guan
* Wenting Zhang
---

## 🚀 Despliegue

Proyecto en producción: **[Sitio Web](https://alimentacion2026daw.up.railway.app/)**

---

## 🔑 Características Principales

* **Autenticación Obligatoria:** Para el acceso a la aplicación los usuarios deben iniciar sesión o registrarse para ver el contenido. La web está protegido por el middleware `auth`.
* **Diseño Responsivo:** * **Pantallas grandes:** Barra de navegación fija superior.
    * **Pantallas pequeñas (móvil):** Menú desplegable adaptado.
* **Arquitectura de Plantillas Heredadas:** Uso eficiente de Blade para evitar la duplicación de código.

---

## 🛠️ Arquitectura y Funcionamiento Dinámico

El proyecto utiliza un sistema de **plantilla única con herencia** para mostrar los 6 tipos de alimentos de forma dinámica:

1.  **Plantilla Base (`layouts.plantilla`):** Contiene la estructura global de la web (Header con navegación responsiva y el Footer).
2.  **Home (`alimentos.home`):** Es la página de inicio (Home). Muestra el catálogo con los accesos a los alimentos disponibles.
3.  **Plantilla de Alimentos (`alimentos.plantilla-alimentos`):** Hereda la plantilla base y genera de forma dinámica las pestañas (menú interno) y las secciones del alimento seleccionado.

### Estructura de Contenido (`resources/views/alimentos/`)

Para gestionar los 6 alimentos con solo una plantilla, el contenido específico está modularizado en subcarpetas dentro de `resources/views/alimentos/`:

```text
resources/views/alimentos/
├── carne/               # Vistas específicas para las pestañas de la carne
├── harina/              # Vistas específicas para las pestañas de la harina
├── leche/               # Vistas específicas para las pestañas de la leche
├── pescado/             # Vistas específicas para las pestañas del pescado
│   ... (resto de alimentos)
├── home.blade.php       # Catálogo inicial de alimentos
└── plantilla-alimentos.blade.php  # Estructura que imprime el contenido dinámico
```

---

## Instalación

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan serve
```