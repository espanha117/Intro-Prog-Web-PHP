<?php

$n1 = 10;
$n2 = 20;

echo "Variável 1 = " . $n1 . "\n";
echo "Variável 2 = " . $n2 . "\n";

$naux = $n1;
$n1 = $n2;
$n2 = $naux;

echo "\nTroca Realizada! \n\n";
echo "Variável 1 = " . $n1 . "\n";
echo "Variável 2 = " . $n2 . "\n";
