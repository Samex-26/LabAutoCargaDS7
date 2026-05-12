Laboratorio de Autocarga PHP (PSR-4)
Implementación
Este proyecto implementa la carga automática PSR-4 utilizando Composer. El objetivo es estandarizar la forma en que las clases se cargan en memoria, garantizando mantenibilidad y eficiencia.

Guía de Instalación
Al clonar este repositorio, debes ejecutar el siguiente comando en la terminal para generar el mapa de clases:

bash
composer dump-autoload
Estructura de Namespaces
El proyecto utiliza el prefijo de Namespace App mapeado a la carpeta física src/.

App\Models → src/Models/

Conclusiones Técnicas
Mantenibilidad: Permite agregar nuevas clases simplemente creando el archivo en la carpeta correcta sin editar configuraciones globales.

Eficiencia de Memoria: Gracias al Lazy Loading, PHP solo carga en memoria las clases que realmente se instancian durante la ejecución.

Estandarización: Seguir el estándar PSR-4 facilita que cualquier desarrollador entienda la estructura del proyecto inmediatamente.

Verificación Final
Para cumplir con la prueba de funcionamiento:

Abre tu navegador (Microsoft Edge, por ejemplo).

Accede a tu index.php (vía localhost si usas WampServer).

Si ves el mensaje de tu clase Usuario sin errores de Class not found, has completado el laboratorio con éxito.

Datos del Estudiante
Nombre: Samuel Ojo Ruiz

Curso: Desarrollo de Software VII

Facultad: Facultad de Ingeniería de Sistemas Computacionales


