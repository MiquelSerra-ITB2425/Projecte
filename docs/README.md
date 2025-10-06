
# Inicio
# **AP - Trabajo con git y despliegue de código inicial - Grupo 7** 

***Objetivo***

En esta actividad será necesario trabajar con la herramienta github. A partir de un código web, conmitarlo en un repositorio, desplegarlo sobre los sistemas y aplicar cambios en el código para solucionar un “bug” que tiene el código.

## Miembros del equipo 

- Bryan Aguilera
- Miquel Serra
- Giuseppe Suarez
- Kristian Toledo

## Índice

- [Herramientas y/o servicios](#herramientas-y--o-servicios-que-hemos-utilizados)
- [Procedimiento de Instalación y configuración del servidor](#procedimiento-de-instalación-y-configuración-del-servidor)
  - [Apache2](#apache2)
  - [Git](#git)
  - [Base de Datos - MySQL](#base-de-datos---mysql)
  - [PHP](#php)
- [Comprobación final](#comprobación)

## Herramientas y / o servicios que hemos utilizados

- Apache2
- PHP
- MySQL
- GitHub

# Procedimiento de Instalación y configuración del servidor

## Apache2

*En nuestro servidor deberemos instalar el Apacahe2, por ende usaremos el siguiente comando*

![Instalacion de Apache](Imagenes/Instalacion-Apache.png "Imagen de la instalación del Apache2")

*Revisaremos el estado del servicio que acabamos de instalar como es la de Apache2*

![Miramos el estado Apache](Imagenes/Status-apache.png "Imagen del estado del servicio del Apache2")

## Git

*Instalaremos el Git para que podamos hacer el commit de los archivos*

![Instalacion Git](Imagenes/Instalacion-git.png "Instalamos el Git y podemos hacer el commit de los archivos")

*Estos archivos lo subiremos al git, haremos el commit*

![Archivos de nuestro Git](Imagenes/Archivos.png "Archivos con el cual haremos el commit")

*Vincularemos el Git y comprobaremos que es correcto y esta disponible*

![Vincular Git con nuestro repositorio](Imagenes/Vincular.png "Vinculamos el Git y hacemos comprobación")

*Ahora hcimos el commit*

![Realizaremos el Commit al Git](Imagenes/Commit.png "Hacemos el commit")

*Resubimos todo al repositorio porque nos dio un pequeño error de que no estaban sincronizados el Git con el del servidor*

![Resubimos todo al repositorio por un error](Imagenes/Force.png "Resubiremos todo por un pequeño error de sincronizacion")

## Base de Datos - MySQL

*A continuación mostraremos la tabla de nuestra base de datos que hemos creado. Usamos MySQL*

![Base De Datos, mostramos la tabla](Imagenes/BD.png "Usaremos la base de datos de MySQL")

*Este es el contenido y el formato de nuestra base de datos*

![Contenido de la base de datos](Imagenes/Contenido.png "Mostramos la base de datos")

## PHP 

*Ahora pondremos en marcha nuestro servicio de PHP*

![Iniciar servicio de PHP](Imagenes/php.png "Iniciamos nuestro servicio de PHP")

## Comprobación

*Podemos abrir nuestro navegador e ingresar a la siguiente pagina; 
Donde nos deja ingresar usuarios, editar los que ya existen o incluso eliminarlos* 

![Ingresar la página](Imagenes/Pagina.png "Ingresamos a la pagina web")


*Si visulizamos la Base de Datos que teniamos antes, podriamos ver que los usuarios que ingresar y se registran en nuestra pagina se añadiran automaticamente a la tabla de nuestra base de datos*

![Revisaremos la tabla de nuestra BD](Imagenes/usuarios.png "Usuarios en nuestra basde de datos")

[***Vuelve al inicio***](#inicio)
