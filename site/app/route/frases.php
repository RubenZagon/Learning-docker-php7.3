<?php

$filedir  = "frases.txt";

# Obtiene el contenido de texto del fichero y lo desglosa en un array
$getFile = file($filedir);

# Genera un número aleatorio, midiendo la totalidad de frases que hay
$getMAX = count($getFile);
$random = mt_rand(0, $getMAX);

//echo "$getFile[$random]";



?>