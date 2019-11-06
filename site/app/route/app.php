<?php

$aApp -> get ('/random-frase', Frases_Controller::Class . ':randomPhrase');

$aApp -> get ('/todas-las-frases', Frases_Controller::Class . ':allPhrases');

$aApp -> get ('/id-frase/{id}', Frases_Controller::Class . ':getPhraseByID');