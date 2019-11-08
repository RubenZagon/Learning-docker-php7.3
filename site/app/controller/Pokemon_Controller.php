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
       #definir donde está el json
       
       $aData = json_decode(file_get_contents($this -> cContainer -> db['path'] . '/' . $this -> cContainer -> db['filename']), true);
       d($aData);

      # aqui me genera el rumero danom  
        //$getMAX = count(Aqui va el archivo json);
        //$random = mt_rand(0, $getMAX);
    } 
} 