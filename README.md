## Ejercicio de frases con slim

Aquí trabajamos con el framework Slim, el mismo ejercicio con 25 frases podremos pedir una frase por medio de la barra de direcciones.

## Pasos a realizar


#### Montaje del Docker

1. Crear la imagen del docker

    `sh build.sh`

2. Correr el docker :whale:

    `sh run.sh`

3. Instalamos las dependencias que necesita PHP con el composer dentro del docker

    `sudo docker exec <ID-contenedor> composer install`

    `sudo docker exec <ID-contenedor> composer clear-cache`

    `sudo docker exec <ID-contenedor> composer dump-autoload`

4. Abrimos un navegador con la dirección *localhost:8080* ó *0.0.0.0:8080*


#### Prueba del ejercicio

Añadimos la siguientes direcciones a la barra de navegación para ejecutar la función que queremos llamar.

Ejemplo:

`0.0.0.0:8080/`    Esto nos mostrará una frase aleatoria en pantalla

### Métodos


|  url                      |     Descripción                                       |
| ------------------------- | ----------------------------------------------------- |
|  /pokemon                 |  Muestra un pokemon aleatorio                         |
|  /pokemon/all             |  Muestra todos los pokemons en la lista               |
|  /pokemon/mysql           |  :construcction: Toma la información de una base de datos, que ahora mismo no está operativa      |