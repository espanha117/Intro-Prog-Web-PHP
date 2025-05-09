<?php

function testePrimo($a){
    $div = 0;
    for ($i = 2; $i <= $a; $i++){
        if($a % $i == 0){
            $div += 1;
        }
    }
    if ($div == 1){
        return true;
    } else return false;
}

$a = 2;

if (testePrimo($a) == true){
    echo "O número $a é primo";
} else if (testePrimo($a) == false){
    echo "O número $a não é primo";
}