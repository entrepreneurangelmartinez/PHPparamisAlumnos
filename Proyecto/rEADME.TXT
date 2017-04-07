¿Qué vamos a realizar?

Desarrollar un simple CRUD el cual va a
realizar la administración de los estudiantes
de un salón, este estará dividido en secciones.

Además cada estudiante va a contener hasta
una imagen.

Estructura del proyectos

Vistas

* Agregar
* Editar
* Eliminar
* Ver

Clases

* Clase Estudiantes
* Clase Secciones
* Clase Conexion

- Uso de controladores
- Uso de namespaces
- .htaccess
- Autoload
- Index.php

Enrutador
(Archivo encargado de llamar a las Vistas
y las clases)



Estructura de base de datos

Diccionario de datos

Secciones
id : int(11)
nombre: varchar(80)

Estudiantes
id: int(11)
nombre: varchar(200)
edad: int(11)
promedio:double
imagen: varchar(200)
id_seccion: int(11)