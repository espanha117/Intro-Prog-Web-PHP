<?php

function classifica($codProduto){
    if ($codProduto == 1){
        return "Alimento não perecível";
    } else if($codProduto >= 2 && $codProduto <= 4){
        return "Alimento perecível";
    } else if($codProduto == 5 || $codProduto == 6){
        return "Vestuário";
    } else if($codProduto == 7 || $codProduto == 8){
        return "Higiene Pessoal";
    } else if ($codProduto >= 9 && $codProduto <= 11){
    return "Utensílio doméstico";
    } else return "Inválido";
}

$codProduto = 7;

echo "Classificação do produto: ". classifica($codProduto);