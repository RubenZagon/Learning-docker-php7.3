<?php

$aApp -> get ('/una-frase', function ($request, $response, $args) {

    $filedir  = "../database/frases.txt";;

    # Obtiene el contenido de texto del fichero y lo desglosa en un array
    $getFile = file($filedir);

    # Genera un número aleatorio, midiendo la totalidad de frases que hay
    $getMAX = count($getFile);
    $random = mt_rand(0, $getMAX);

    return $getFile[$random];
});

$aApp -> get ('/todas-las-frases', function ($request, $response, $args) {

    $filedir  = "../database/frases.txt";

    # Obtiene el contenido de texto del fichero y lo desglosa en un array
            $getFile = file($filedir);

    # Imprime todas las frases en la página
    echo "<h1> Todas las frases</h1>";

    foreach ($getFile as $frase) {
        echo "<br>$frase";
    }

    // d($getFile); // Descomentar para ver todas el array sin imprimirlo en la página

    return;
});