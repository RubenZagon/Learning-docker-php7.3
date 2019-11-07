<?php

namespace Controller;

use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as Request,
    Psr\Http\Message\ResponseInterface as Response;




class Frases_Controller {

    protected $atributo_Container;

    private $getFile;

    public function __construct (Container $entrada_Container) {

        # Obtiene el contenido de texto del fichero y lo desglosa en un array
        $this -> getFile = file('../database/frases.txt');

        $this -> atributo_Container = $entrada_Container;
    }


    public function randomPhrase (Request $rRequest, Response $rResponse, $args ){

        # Genera un número aleatorio, midiendo la totalidad de frases que hay
        $getMAX = count($this -> getFile);
        $random = mt_rand(0, $getMAX);

        return $this -> getFile[$random];
    }


    public function allPhrases (Request $rRequest, Response $rResponse, $args){

        # Imprime todas las frases en la página
        echo "<h1> Todas las frases</h1>";

        foreach ($this -> getFile as $frase) {
            echo "<br>$frase";
        }

        return;
    }


    public function getPhraseByID (Request $rRequest, Response $rResponse, $args){

        # Mediante el argumento que le metemos, se selecciona el elemento del array, se le pone un -1 porque el array comienza el elemento 1. en la posición 0
        return $this -> getFile[$args["id"]-1];

    }

}