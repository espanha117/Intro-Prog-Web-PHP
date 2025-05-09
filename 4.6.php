<?php

$matriz = array(
    array(4, 6, 2, 7, 5),
    array(15, 12, 16, 19, 14),
    array(24, 22, 25, 23, 29),
    array(38, 32, 34, 36, 31)
);
$matrizPares = [];
$matrizImpares = [];

foreach($matriz as $linha){
    for($i=0; $i<count($linha); $i++){
        echo "$linha[$i], ";
    }
    echo "\n";
    for($i=0; $i<count($linha); $i++){
        if($linha[$i] % 2 == 0){
            $matrizPares [] = $linha[$i];
        } else {
            $matrizImpares [] =$linha[$i];
        }
        }
    }

echo "Matriz impares: ";
foreach ($matrizImpares as $impar){
    echo "$impar ";
}

echo "\nMatriz pares: ";
foreach ($matrizPares as $par){
    echo "$par ";
}