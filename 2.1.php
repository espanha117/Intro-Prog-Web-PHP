<?php

$numeros = array(2, 5, 3, 8);
$soma = 0;
foreach($numeros as $numero){
    if($numero % 2 == 0){
        $soma += $numero;
    }
}

echo "Soma = $soma";