<?php

$string = 'e hoje que eu te traco';
$caracter = 'e';

$quantidade = substr_count($string, $caracter);
echo "A quantidade de vezes que a letra $caracter aparece na frase é $quantidade";