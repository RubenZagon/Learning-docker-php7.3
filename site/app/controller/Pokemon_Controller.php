<?php

namespace Controller;

use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as Request,
    Psr\Http\Message\ResponseInterface as Response;

use Model\Pokemon_Model;

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


    $aParameters = [
        'aPage' => [
            'srtTitle' => 'Pokemon Random',
            'srtDescription' => 'Muestra un pokemon random de los 151'
        ],
        'aPokemon' => $aData[$random]['id']

    ];



    return $this -> aContainer -> view -> render ($rResponse, 'pokemon.twig', $aParameters);
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

    public function mysql (Request $rRequest, Response $rResponse){

        $aConfig = $this -> aContainer -> get('config');

        $aData = $this -> aContainer -> db -> table('pokemons') -> get();

        d($aData);

        d($aData[5]);

        //echo $aData[0][0];
    }
}