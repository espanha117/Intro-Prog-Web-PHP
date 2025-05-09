<?php

function maiorNumero($a, $b, $c){
    $maiorNumero = $a;
    if ($maiorNumero < $b){
        $maiorNumero = $b;
    }
    if ($maiorNumero < $c){
        $maiorNumero = $c;
    }
    return $maiorNumero;
}

function maior($array){
    $maior = $array[0];
    for ($i=0; $i < count($array); $i++){
        if ($maior<$array[$i]){
            $maior = $array[$i];
        }
    }
    return $maior;
}

$a = 8;
$b = 5;
$c = 10;

$array = [$a, $b, $c];

echo "Maior número = " . maior($array);