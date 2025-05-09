<?php

function parOuImpar($a){
    if($a % 2 == 0){
        return "Par";
    } else return "Impar";
}

function multiplicar ($a, $b){
    return $a * $b;
}

function dividir($a , $b){
    return $a / $b;
}

function raiz($a){
    for ($i = 0; $i<$a; $i++){
        if(($i*$i) == $a){
            return $i;
        }
    }
}

function potencia($a, $b){

    return $a ** $b;
}

$a = 100;
$b = 2;
$op = 5;
echo "----------Menu---------- \n";
echo "1) Verifique se um número é par ou ímpar
2) Multiplicar dois números
3) Dividir dois números
4) Raiz quadrada de um número
5) Elevar um número a uma potência\n";

echo "\nEscolha do usuário: $op\n\n";


if($op == 1){
    echo "O número $a é " . parOuImpar($a);
} else if($op == 2){
    echo "O resultado da multiplicação de $a por $b é igual a: " . multiplicar($a, $b);
} else if($op == 3){
    echo "O resultado da divisão de $a por $b é igual a: " . dividir($a, $b);
} else if($op == 4){
    echo "A raiz quadrada de $a é: " . raiz($a);
} else if($op == 5){
    echo "$a elevado a $b é igual a: " . potencia($a, $b);
} else echo "Operação inválida";