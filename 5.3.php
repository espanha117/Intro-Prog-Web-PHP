<?php

function opcao1($nota1, $nota2, $nota3){
    return ($nota1 + $nota2 + $nota3)/3;
    
} 

function opcao2($nota1, $nota2, $nota3){
    return (($nota1 * 3) + ($nota2 * 3) + ($nota3 * 4))/10;
}


$nota1 = 8.6;
$nota2 = 9.0;
$nota3 = 6.2;
$opcao = 2;

switch ($opcao){
    case 1:
        echo "Média: " . round(opcao1($nota1, $nota2, $nota3), 2);
        break;
    case 2:
        echo "Média: " . round(opcao2($nota1, $nota2, $nota3), 2);
}