<?php

use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as Request,
    Psr\Http\Message\ResponseInterface as Response;

$aApp -> get ('/random-middleware', Frases_Controller::Class . ':randomPhrase') -> add(new \Middleware\Frases_Middleware());

$aApp -> get ('/random', Frases_Controller::Class . ':randomPhrase');

$aApp -> get ('/todas-las-frases', Frases_Controller::Class . ':allPhrases');

$aApp -> get ('/id-frase/{id}', Frases_Controller::Class . ':getPhraseByID');

$aApp -> get ('/', Home_Controller::Class . ':getHome');