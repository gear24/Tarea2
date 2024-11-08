<?php

$filas = 4;

for ($i = 1; $i <= $filas; $i++) {    
    for ($j = 1; $j <= 2 * $filas - 1; $j++) {
        echo ($j >= $filas - $i + 1 && $j <= $filas + $i - 1) ? '*' : ' ';
    }    
    echo "\n";
}
/*
Funciona algo asi como una cuadricula y en base a eso determina omo se pone el puntito
*/
?>