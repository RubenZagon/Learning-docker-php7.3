<?php

namespace Controller;

use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as Request,
    Psr\Http\Message\ResponseInterface as Response;


class Home_Controller {

    protected $aContainer;

    public function __construct (Container $cContainer){

        $this -> aContainer = $cContainer;
    }

    public function getHome (Request $rRequest, Response $rResponse, $args){

        $aParameters = [
            'aPage' => [
                'strTitle' => 'Slim + Twig',
                'strDescription' => 'Esta es una plantilla oficial de Slim + Twig'
            ]
        ];

        return $this -> aContainer -> view -> render ($rResponse, 'plantilla.twig', $aParameters);
    }

}