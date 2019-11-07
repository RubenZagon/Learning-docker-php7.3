<?php

use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as Request,
    Psr\Http\Message\ResponseInterface as Response;

$aApp -> get ('/random-frase', Frases_Controller::Class . ':randomPhrase');

$aApp -> get ('/todas-las-frases', Frases_Controller::Class . ':allPhrases');

$aApp -> get ('/id-frase/{id}', Frases_Controller::Class . ':getPhraseByID');

$aApp -> get ('/plantilla', function (Request $rRequest, Response $rResponse, $args){

    $aParameters = [
        'aPage' => [
            'strTitle' => 'Bienvenido a Slim + Twig',
            'strDescription' => 'Esta es una plantilla oficial de Slim + Twig'
        ]
    ];

    return $this -> view -> render ($rResponse, 'plantilla.twig', $aParameters);
});