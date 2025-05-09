<?php

$clientes = array(
    array('Georgi', 'Facello', 26, 6, 1986),
    array('Bazalel', 'Simmel', 21, 11, 1985),
    array('Parto', 'Bamford', 28, 8, 1986),
    array('Chirstian', 'Koblick', 01, 12, 1986),
    array('Kyoichi', 'Maliniak', 12, 9, 1989),
    array('Anneke', 'Preusig', 202, 6, 1989),
    array('Tzvetan', 'Zielinski', 10, 2, 1989),
);

foreach ($clientes as $pessoa){
    echo "Nome: $pessoa[0] $pessoa[1], Data Nascimento: $pessoa[2]/$pessoa[3]/$pessoa[4]";
    echo ".\n";
}

echo "\n Pessoas nascidas em junho: \n";
foreach ($clientes as $pessoa){
    if($pessoa[3] == 6){
            echo " $pessoa[0] $pessoa[1]\n";
    }
}

echo "\n Pessoas com sobrenome Facello: \n";
foreach ($clientes as $pessoa){
    if($pessoa[1] == 'Facello'){
            echo " $pessoa[0] $pessoa[1]\n";
    }
}