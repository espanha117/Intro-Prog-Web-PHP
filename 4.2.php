<?php 

$string = "estou com vontade de beber";
$caracter = "e";
$contador = 0;
for($i = 0; $i<strlen($string); $i++){
    if($caracter == substr($string, $i, 1)){
        $contador++;
    }
}
echo "Na frase ($string), a letra $caracter aparece $contador vezes";