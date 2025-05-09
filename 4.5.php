<?php

$vetor = [42, 17, 83, 31, 64, 8, 76, 53, 29, 95, 12, 67, 34, 88, 23, 71, 46, 99, 15, 60];

sort($vetor);
echo "Menor valor: $vetor[0]\n";
echo "Maior valor: " .  $vetor[count($vetor)-1];
$contPares = 0;
$soma = 0;
for($i=0; $i<count($vetor);$i++){
    if($vetor[$i] % 2 ==0){
        $contPares++;
    }
    $soma += $vetor[$i];
}
$media = $soma/count($vetor);
$porcentagemPares = $contPares*100/count($vetor);
echo "\nA porcentagem de números pares é de: $porcentagemPares%\n";
echo "A média dos valores do vetor é: $media";
