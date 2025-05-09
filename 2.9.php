<?php

function soma($a, $b):int{
    $soma = $a+$b;
    return $soma;
}

function subtracao($a, $b){
    $sub = $a-$b;
    return "Divisão: " . $sub;
}

function multiplicar($a, $b){
    $mult = $a*$b;
    return $mult;
}

function dividir($a, $b){
    $divi = $a/$b;
    return $divi;
}

$a = 5;
$b = 8;
$op = 2;

if($op == 1){
    echo "Soma: " . soma($a,$b);
} else if($op == 2){
    echo subtracao($a,$b);
} else if($op == 3){
    echo multiplicar($a,$b);
} else if($op == 4){
    echo dividir($a,$b);
} else echo "Operação inválida!";