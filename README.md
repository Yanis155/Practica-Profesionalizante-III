Trabajo Sistema de Gestión Vial

Para que funcione el proyecto tene en cuenta lo siguiente:

PHP: Versión 8.1

Composer: Para manejar dependencias de PHP.

MySQL: lo que usa por defecto Laragon.

Laragon: Version 8.1.0

Git: para clonar el código del Repositorio.


Para una correcta instalación, seguir los siguientes pasos:

1) Primer paso dirigirse a la carpeta Laragon, ir a la carpeta www, clonar el repositorio de git copiando el siguiente
  comando: git clone https://github.com/Yanis155/Practica-Profesionalizante-III.git
3) Instala las dependecias de PHP: Composer install 
4) Crea un archivo de configuración, copiando en tu consola de comandos  cp. .env.example .env 
5) Genera una clave en Laravel desde la carpeta raíz del proyecto, abriendo la terminal y ejecuta el siguiente comando: php artisan key:generate
   laravel generará una nueva clave automáticamente y la guardara en el archivo .env del proyecto
6) Configura la base de datos: edita el archivo .env

	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=practica3
	DB_USERNAME=root
	DB_PASSWORD=

8) Luego dirigite a la terminal y copia el siguiente comando para ejecutar las migraciones correspondientes a la Base de datos: Php artisan migrate.
9) Por último, debes ejecutar el siguiente comando: php artisan db:seed para ejecutar los seeders.
   Y listo el proyecto ya esta en funcionamiento! 
