<?php

for($i=200; $i >= 100; $i--){
    echo $i;
    if ($i % 2 == 0){
        echo " par\n";
    } else echo " ímpar\n";
}