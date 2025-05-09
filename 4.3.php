<?php

function soma($a, $b){
    return $a + $b;
}

function multiplicador($a, $b){
    return $a * $b;
}

function subtrair($a, $b){
    return $a - $b;
}

function dividir($a, $b){
    return $a / $b;
}

$a = 7;
$b = 23;
$op = 1;

switch($op){
    case 1:
        echo "Resultado da soma: " . soma($a, $b);
        break;
    case 2:
        echo "Resultado da subtração: " . subtrair($a, $b);
        break;
    case 3:
        echo "Resultado da multiplicação: " . multiplicador($a, $b);
        break;
    case 4:
        echo "Resultado da divisão: " . dividir($a, $b);
        break;
}