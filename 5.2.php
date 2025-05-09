<?php

$idadeNadadores = array(7, 12, 19, 5, 23, 15, 8, 21, 5, 17, 10, 25, 6, 14, 22);

$infantil = [];
$juvenil = [];
$senior = [];

for ($i=0; $i<count($idadeNadadores); $i++){
    if($idadeNadadores[$i]>= 5 && $idadeNadadores[$i]<=10){
        $infantil[] = $idadeNadadores[$i];
    } else if($idadeNadadores[$i]>= 11 && $idadeNadadores[$i]<=17){
        $juvenil[] = $idadeNadadores[$i];
    } else if ($idadeNadadores[$i] >= 18){
        $senior[] = $idadeNadadores[$i];
    }
}

echo "A quantidade de nadadores da categoria infantil é " . count($infantil);
echo "\nA quantidade de nadadores da categoria juvenil é " . count($juvenil);
echo "\nA quantidade de nadadores da categoria senior é " . count($senior);
