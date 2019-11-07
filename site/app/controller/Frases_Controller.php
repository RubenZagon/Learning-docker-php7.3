<?php

namespace Controller;

use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as Request,
    Psr\Http\Message\ResponseInterface as Response;




class Frases_Controller {

    protected $atributo_Container;

    const FILEDIR = '../database/frases.txt';

    private $getFile = file(self::FILEDIR);

    public function __construct (Container $entrada_Container) {
        
        $this -> atributo_Container = $entrada_Container;
    }


    public function randomPhrase (Request $rRequest, Response $rResponse, $args ){

        # Obtiene el contenido de texto del fichero y lo desglosa en un array
        //$getFile = file(self::FILEDIR);

        # Genera un número aleatorio, midiendo la totalidad de frases que hay
        $getMAX = count($this -> getFile);
        $random = mt_rand(0, $getMAX);

        return $this -> getFile[$random];
    }

    public function allPhrases (Request $rRequest, Response $rResponse, $args){

        # Obtiene el contenido de texto del fichero y lo desglosa en un array
        $getFile = file(self::FILEDIR);

        # Imprime todas las frases en la página
        echo "<h1> Todas las frases</h1>";

        foreach ($getFile as $frase) {
            echo "<br>$frase";
        }

        return;
    }

    public function getPhraseByID (Request $rRequest, Response $rResponse, $args){

        # Obtiene el contenido de texto del fichero y lo desglosa en un array
        $getFile = file(self::FILEDIR);

        # Mediante el argumento que le metemos, se selecciona el elemento del array, se le pone un -1 porque el array comienza el elemento 1. en la posición 0
        return $getFile[$args["id"]-1];

    }

}