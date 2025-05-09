<?php

$pessoas = array(
    array(18, 64.6, 1.42, 'A', 'P'),
    array(25, 70.3, 1.80, 'C', 'C'),
    array(30, 58.4, 1.65, 'V', 'L'),
    array(22, 90.0, 1.45, 'P', 'R'),
    array(35, 82.1, 1.68, 'C', 'C'),
    array(59, 60.2, 1.60, 'A', 'L'),
    array(41, 75.5, 1.78, 'V', 'P'),
    array(19, 55.0, 1.45, 'P', 'C'),
    array(63, 58.9, 1.70, 'C', 'P'),
    array(27, 73.3, 1.82, 'A', 'R')
);

$contA =0;
$contB = 0;
$contC = 0;
$contD = 0;
$soma = 0;
foreach($pessoas as $pessoa){
    if($pessoa[0]>50 && $pessoa[1]<60){
        $contA ++;
    }
    if ($pessoa[2]<1.5){
        $soma += $pessoa[0];
        $contB++;
    }
    $mediaIdadeB = $soma/$contB;
    if($pessoa[3] == 'A'){
        $contC++;
    }
    $porcentagemAzul = $contC / count($pessoas) * 100;
    if ($pessoa[4] == 'R' && $pessoa[3]!= 'A'){
        $contD++;
    }
}



echo "Pessoas com mais de 50 anos e menos de 60kg: $contA\n"; 
echo "Média das idades das pessoas com altura inferior a 1,50: $mediaIdadeB\n";
echo "Porcentagem de pessoas com olhos azuis: $porcentagemAzul%\n";
echo "Quantidade de ruivos sem olhos azuis: $contD";
