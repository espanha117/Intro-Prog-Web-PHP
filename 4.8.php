<?php

function calcularMedia($notas){
    $soma = 0;
    foreach($notas as $nota){
        $soma += $nota;
    }
    return $soma / count($notas);
}

$notas = [7.5, 8.2, 6.8, 9.1, 2.7];
echo "Suas notas: ";
foreach ($notas as $nota){
    echo "$nota ";
}

echo "\nMédia: " . calcularMedia($notas);
if (calcularMedia($notas) >= 7){
    echo "\nAprovado!";
} else echo "\nReprovado.";