<?php

  // Include Composer autoload
  require('../vendor/autoload.php');

  $array = [
    'nombre' => 'Ruben',
    'numero' => '42'
  ];

#    echo $array['nombre'];
#    print_r($array);    // Imprime el array en forma de texto


    d($array); // d() es una funcion que te muestra de manera visual los datos.

  $array_2 = [
    'Manz',
    8 => 'manualmente',
    42
  ];


#  echo $array_2[0];     // Manz
#  print_r($array_2);    // Array ( [0] => Manz [8] => manualmente [9] => 42 )
  d($array_2);

  ##############  FLUJOS DE CONTROL   ####################


  ##############  VARIABLES DEL SERVIDOR   ####################
#  d($_SERVER['DOCUMENT_ROOT']);
#  d($_SERVER['REMOTE_ADDR']);
#  d($_SERVER['HTTP_USER_AGENT']);
#  d($_SERVER['SERVER_ADDR']);
  d($_SERVER['QUERY_STRING']);


    ##############  SECURIZACIÓN   ####################
    $_GET['id'] = (int)$_GET['id']  //Te lo convierte a tipo numero, da igual que metas una string.

?>
