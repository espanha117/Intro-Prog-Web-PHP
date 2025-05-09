<?php

$frutas = ["Maca", "Banana", "Pera", "Uva"];
$procura = 'Uva';
$encontrada = false;
foreach ($frutas as $fruta){
    if($fruta == $procura){
        $encontrada = true;
    }
}

if($encontrada == true){
    echo "String encontrada";
} else echo "String não encontrada";
