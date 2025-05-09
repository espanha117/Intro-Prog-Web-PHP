<?php

$notas = [7.5, 8.2, 6.8, 9.1, 2.7];
$soma = 0;
echo "Suas notas: ";
foreach ($notas as $nota){
    echo "$nota ";
    $soma += $nota;
}
$media = $soma/count($notas);

echo "\nMédia: $media";
if ($media >= 7){
    echo "\nAprovado!";
} else echo "\nReprovado.";