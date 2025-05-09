<?php

$pessoa = array('nome'=> 'Adriana', 'idade' => 27, 'sexo'=>'F');
if($pessoa['sexo'] == 'F' && $pessoa['idade'] < 25){
    echo "Aceita!";
} else{
    echo "Não aceita!";
}