<?php

function testePositivo($a){
    if($a>0){
        return "P";
    } else if ($a<=0){
        return "N";
    }
}

$a = -9;

$resultado = testePositivo($a);

echo $resultado;