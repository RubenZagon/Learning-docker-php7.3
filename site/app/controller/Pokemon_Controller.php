<?php

namespace Controller;

use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as Request,
    Psr\Http\Message\ResponseInterface as Response;

class Pokemon_Controller{
    protected $aContainer;

    public function __construct (Container $cContainer){
        $this -> aContainer = $cContainer;
    }

    public function randomPokemon (Request $rRequest, Response $rResponse){


    # Definir donde está el json
    $aData = json_decode(file_get_contents('../database/pokemons.json'), true);

    # Genera el número random
    $getMAX = count($aData);
    $random = mt_rand(0, $getMAX);

    echo $aData[$random]['name'];
    echo "<br>";
    echo $aData[$random]['types'][0], " - ", $aData[$random]['types'][1];
    echo "<br>";
    echo $aData[$random]['id'];

    d($aData);
    }

    public function getAll (Request $rRequest, Response $rResponse){

    $aData = json_decode(file_get_contents('../database/pokemons.json'), true);

    foreach ($aData as $clave => $element) {
        echo "<br>";
        echo $element['id'],"  -  ", $element['name'], "  -  ", $element['types'][0], "/", $element['types'][1];
        d($element['name']);

        }
    return;
    }
}