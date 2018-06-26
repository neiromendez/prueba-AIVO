# Aivo Test
 
Esto es una prueba para la empresa [aivo](https://aivo.co/), 
este repositorio contiene un endpoint de la api de facebook php graph sdk para obtener la informacion de un perfil con el ID de una cuenta de facebook

## Pre-requisitos

 * Tener instalado [Apache](http://httpd.apache.org/docs/2.4/es/install.html)
 * Tener instalado [PHP 5.4+](http://php.net/manual/en/install.php)
 * Tener instalado [Composer](https://getcomposer.org/download/) 

### Empecemos

 *  Ir a la direccion del proyecto donde esta ubicado el archivo composer.lock
 
 *  Ejecutar el comando desde el terminal para instalar las dependencias del archivo composer.lock
 
        composer install
         
 *  Desde el terminal ejecutar el comando de [php built-in webserver](http://php.net/manual/en/features.commandline.webserver.php)
 para iniciar el servidor web local
 
        php -S localhost:8000       
  
### Pequeño ejemplo

  *  En el explorador de tu preferencia coloca en la URL el siguiente endpoint. 
 
         /profile/facebook/10155692483667149