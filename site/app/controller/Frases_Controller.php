<?php

namespace Controller;

use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as Request,
    Psr\Http\Message\ResponseInterface as Response;

class Frases_Controller {

    protected $atributo_Container;

    public function __construct (Container $entrada_Container) {
        $this -> atributo_Container = $entrada_Container;
    }

    public function randomPhrase (Request $rRequest, Response $rResponse, $args ){

        $filedir  = "../database/frases.txt";;

        # Obtiene el contenido de texto del fichero y lo desglosa en un array
        $getFile = file($filedir);

        # Genera un número aleatorio, midiendo la totalidad de frases que hay
        $getMAX = count($getFile);
        $random = mt_rand(0, $getMAX);

        return $getFile[$random];
    }

    public function allPhrases (Request $rRequest, Response $rResponse, $args){

        $filedir  = "../database/frases.txt";

        # Obtiene el contenido de texto del fichero y lo desglosa en un array
        $getFile = file($filedir);

        # Imprime todas las frases en la página
        echo "<h1> Todas las frases</h1>";

        foreach ($getFile as $frase) {
            echo "<br>$frase";
        }

        return;
    }

}