<?php

$produtos = array(
    array('Produto 1', 200, 10, 2000),
    array('Produto 2', 100, 10.5, 1050),
    array('Produto 3', 100, 11, 1100),
    array('Produto 4', 100, 12, 1200),
    array('Produto 5', 300, 14, 4200),
    array('Produto 6', 200, 15, 3000),
);

echo "Unidades compradas do produto 4: " . $produtos[3][1] . 
"\nPreço unitário: " . $produtos[3][2] . 
"\nPreço total: ". $produtos[3][3] . "\n";

$maisComprado = $produtos [0];
$maisCaro = $produtos[0];
$soma = 0;
foreach($produtos as $produto){
    if($maisComprado[1] < $produto[1]){
        $maisComprado = $produto;
    } 
    if($maisCaro[2]<$produto[2]){
        $maisCaro = $produto;
    }
    $soma += $produto[1];
}
$media = $soma/count($produtos);
echo "Produto mais comprado: " . $maisComprado[0] . " (". $maisComprado[1] ." unidades.)\n";
echo "Produto mais caro: " . $maisCaro[0] . ". Preço R$". $maisCaro[2] ."\n";
echo "Media dos produtos vendidos: ". round($media, 2) . " de cada produto.";