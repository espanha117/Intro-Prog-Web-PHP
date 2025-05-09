<?php

$limiteInferior = 40;
$limiteSuperior = 67;
$soma = 0;
for ($i = $limiteInferior; $i <= $limiteSuperior; $i++){
    if($i % 2 == 0){
        $soma += $i;
    }
}

echo "Soma: $soma";