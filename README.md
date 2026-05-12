Laboratorio de Autocarga PHP (PSR-4)
Implementación de la Carga Automática bajo el Estándar PSR-4 con Composer.  

Guía de Instalación
Al clonar este repositorio, debes ejecutar el siguiente comando en la terminal para generar el mapa de clases:  

Bash
composer dump-autoload
Estructura de Namespaces
El proyecto utiliza el prefijo de Namespace App mapeado a la carpeta física src/.  

App\Models -> src/Models/

Conclusiones Técnicas   


Mantenibilidad: Permite agregar nuevas clases simplemente creando el archivo en la carpeta correcta sin editar configuraciones globales.  


Eficiencia de Memoria: Gracias al Lazy Loading, PHP solo carga en memoria las clases que realmente se instancian durante la ejecución.  


Estandarización: Seguir el estándar PSR-4 facilita que cualquier desarrollador entienda la estructura del proyecto inmediatamente.  

3. Verificación Final
Para cumplir con la Prueba de Funcionamiento:  

Abre tu navegador (Microsoft Edge, por ejemplo).

Accede a tu index.php (vía localhost si usas WampServer).

Si ves el mensaje de tu clase Usuario sin errores de "Class not found", ¡has completado el laboratorio con éxito!.

Datos del Estudiante Nombre: Samuel Ojo Ruiz

Curso: Desarrollo de Software VII

Facultad: Facultad de Ingeniería de Sistemas Computacionales

Institución: Universidad Tecnológica de Panamá
