<?php

$aContainer = $aApp -> getContainer();

$aContainer['Frases_Controller'] = function ($Entrada_Container) {
    return new \Controller\Frases_Controller($Entrada_Container);
};

$aContainer['db'] = function ($Entrada_Container) {

    $aConfig = $Entrada_Container -> get('config')['db'];
};