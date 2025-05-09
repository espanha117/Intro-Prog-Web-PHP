<?php

$nadadores = array(
    array ("Andrei", 7),
    array ("Paulo", 12),
    array ("Adriana", 19),
    array ("Yann", 11),
    array ("Ana Julia", 16),
    array ("Felipe", 8),
    array ("Giovana", 14),
    array ("Bernardo", 11),
    array ("Amanda", 20),
    array ("Kauan", 15),
    array ("Isabela", 6),
    array ("Carol", 17),
    array ("Miguel", 13),
    array ("Fernando", 10),
    array ("Betina", 5)
);

$infantil =[];
$juvenil = [];
$senior = [];

foreach ($nadadores as $nadador){
    if($nadador[1]>=5 && $nadador[1]<=10){
        $infantil [] = $nadador;
    } else if($nadador[1]>=11 && $nadador[1]<=17){
        $juvenil [] = $nadador;
    } else if($nadador[1] >= 18){
        $senior [] = $nadador;
    }
}

echo "Categoria Infantil: ". count($infantil) . " nadadores.\n";
echo "Categoria Juvenil: ". count($juvenil) . " nadadores.\n";
echo "Categoria Senior: ". count($senior) . " nadadores.\n";

echo "\nCategoria Infantil: \n";
foreach ($infantil as $nadinf){
    echo "Nome: $nadinf[0] | Idade: $nadinf[1]\n";
}

echo "\nCategoria Juvenil: \n";
foreach ($juvenil as $nadju){
    echo "Nome: $nadju[0] | Idade: $nadju[1]\n";
}

echo "\nCategoria Senior: \n";
foreach ($senior as $nadsen){
    echo "Nome: $nadsen[0] | Idade: $nadsen[1]\n";
}