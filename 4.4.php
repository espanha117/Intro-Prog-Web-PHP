<?php

$vetor1 = [3, 7, 1, 9, 4, 6, 2, 8, 5, 10];
$vetor2 = [];

foreach($vetor1 as $numero){
    if($numero % 2 == 0){
        $vetor2[] = $numero;
    }
}

var_dump($vetor2);