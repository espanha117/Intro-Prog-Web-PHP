<?php

function cParaF($tempCelsius){
    $tempFa = (($tempCelsius * 9 / 5) + 32) / 32;
    return $tempFa;
}

function fParaC($tempFa){
    $tempCelsius = (5/9)*($tempFa-32);
}

$tempCelsius = 43;
$tempFa = 0;
$operacao = 1;

if ($operacao == 1){
    echo "$tempCelsius em Celsius equivale a " . cParaF($tempCelsius) . " graus em Fahrenheit.";
} else if($operacao == 2){
    $fToC = number_format(fParaC($tempFa), 2);
    echo "$tempFa em Fahrenheit equivale a " . $fToC. " graus em Celsius.";
} else echo "Operação inválida!";