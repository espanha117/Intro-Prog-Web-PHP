<?php

$limiteInferior = 23;
$limiteSuperior = 34;
$soma =0;

for($i = $limiteInferior; $i <= $limiteSuperior; $i++){
    if ($i % 2 == 0){
        $soma += $i;
    }
}
echo "Soma dos números pares entre $limiteInferior e $limiteSuperior: $soma";