# Laboratorio de Autocarga PHP (PSR-4)

Este proyecto implementa la **carga automática PSR-4** utilizando **Composer**. El objetivo es estandarizar la forma en que las clases se cargan en memoria, garantizando mantenibilidad y eficiencia, eliminando por completo el uso de `include` y `require` manuales.

## Guía de Instalación

Al clonar este repositorio por primera vez, es necesario instalar las dependencias y generar el mapa de clases. Ejecute el siguiente comando en la terminal desde la raíz del proyecto:

```bash
composer install

```

Si realiza cambios en la estructura de archivos o en el archivo `composer.json`, puede actualizar el autoloader con:

```bash
composer dump-autoload

```

## Estructura de Namespaces

El proyecto utiliza el prefijo de Namespace **App** mapeado a la carpeta física **src/**. Esta relación garantiza que el sistema cargue las clases automáticamente siguiendo la jerarquía de carpetas.

* `App\Models` → `src/Models/`
* `App\Controllers` → `src/Controllers/`

<img width="847" height="413" alt="image" src="https://github.com/user-attachments/assets/c83b1444-65ba-426c-85af-c183757ba99e" />


## Pruebas de Ejecución y Verificación

Para validar que la implementación es correcta, existen dos métodos de ejecución detallados a continuación:

### 1. Entorno Web (WampServer + Localhost)

Ideal para visualizar el resultado de forma gráfica en el navegador.

* **Ubicación:** El proyecto debe estar en `C:\wamp64\www\AutoCarga`.
* **Servicios:** Asegúrese de que WampServer esté iniciado (icono en verde).
* **Acceso:** Abra su navegador y escriba: `http://localhost/AutoCarga/public/index.php`.
* **Resultado:** Se visualizará el mensaje de éxito de la clase Usuario.
  <img width="621" height="229" alt="image" src="https://github.com/user-attachments/assets/9eab65fd-bef4-4e32-a834-f5bc61333662" />


### 2. Interfaz de Línea de Comandos (CLI / Terminal)

Para una verificación rápida directamente desde la terminal de VS Code.

* **Navegación:** Situarse en la raíz del proyecto.
* **Ejecución:** Ejecute el comando:
```bash
php public/index.php

```

* **Resultado:** La terminal imprimirá: `¡Hola desde la clase Usuario cargada con Autoload!`.
  <img width="505" height="203" alt="image" src="https://github.com/user-attachments/assets/0d4576ff-1e48-4b97-938c-8e04462263db" />


## Conclusiones Técnicas

1. **Mantenibilidad:** Facilidad de agregar nuevas clases simplemente creando el archivo en la carpeta correcta siguiendo la jerarquía de namespaces, sin necesidad de editar archivos de configuración globales.
2. **Eficiencia de Memoria:** Gracias al *Lazy Loading* (carga bajo demanda), PHP solo carga en memoria los archivos de las clases en el momento preciso en que se instancian, optimizando el rendimiento del servidor.
3. **Estandarización:** Seguir el estándar PSR-4 facilita el trabajo colaborativo, ya que cualquier desarrollador familiarizado con el estándar puede comprender la ubicación de la lógica de negocio inmediatamente.

## Datos del Estudiante

* **Nombre:** Samuel Ojo Ruiz
* **Curso:** Desarrollo de Software VII
* **Facultad:** Facultad de Ingeniería de Sistemas Computacionales (FISC)
* **Institución:** Universidad Tecnológica de Panamá
* **Fecha:** Mayo 2026

