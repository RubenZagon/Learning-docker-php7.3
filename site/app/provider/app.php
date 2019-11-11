<?php

$aContainer = $aApp -> getContainer();

$aContainer['view'] = function ($cContainer){

    $aConfig = $cContainer -> get ('config')['view'];

    $vViews = new \Slim\Views\Twig( $aConfig['path'], $aConfig['twig']);


    $vViews -> addExtension (new \Slim\Views\TwigExtension(
        $cContainer -> router,
        $cContainer -> request -> getUri ()
    ));

    return $vViews;
};

$aContainer['Frases_Controller'] = function ($cContainer) {
    return new \Controller\Frases_Controller($cContainer);
};

$aContainer['Home_Controller'] = function ($cContainer) {
    return new \Controller\Home_Controller($cContainer);
};

$aContainer['Pokemon_Controller'] = function ($cContainer){
    return new \Controller\Pokemon_Controller($cContainer);
};

$aContainer['db'] = function ($cContainer) {

    $mManager = new \Illuminate\Database\Capsule\Manager;

    $aConfig = $cContainer -> get('config')['db'];

    if ($aConfig['driver'] != 'mysql') return $aConfig[$aConfig['driver']];

    $mManager -> addConnection($aConfig[$aConfig['driver']]);

    $mManager -> setAsGlobal();
    $mManager -> bootEloquent();

    return $mManager;
};
