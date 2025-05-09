<?php

$a = 11;

if($a %2 == 0 && $a < 10){
    echo "Número par menor que 10";
} else if($a %2 != 0 && $a < 10){
    echo "Número impar menor que 10";
} else echo "Número fora do intervalo";