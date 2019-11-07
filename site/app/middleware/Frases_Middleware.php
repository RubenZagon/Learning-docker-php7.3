<?php

namespace Middleware;

use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as Request,
    Psr\Http\Message\ResponseInterface as Response;


class Frases_Middleware {

    public function __invoke (Request $rRequest, Response $rResponse, $cNext){

        $rResponse -> getBody() -> write ("Directorio del archivo: '../database/frases.txt'<br>");

        $rResponse = $cNext($rRequest, $rResponse);

        return $rResponse;
    }

}