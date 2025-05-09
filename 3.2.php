<?php

function soma($a, $b, $c){
    return $soma = $a + $b + $c;
}

function media($a, $b, $c){
    return $media = (soma($a, $b, $c))/3;
}

$a = 7;
$b = 8;
$c = 17;

echo "Soma: " . soma($a, $b, $c);
echo "\nMédia: " . media($a, $b, $c);