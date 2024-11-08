<?php 
#https://www.php.net/manual/en/function.array-count-values.php
#https://www.php.net/manual/en/function.preg-match.php
#https://www.php.net/manual/es/language.types.array.php
#https://www.php.net/manual/en/function.mb-strtolower.php

function contarChars($str) { 
    #$str = mb_strtolower($str, 'UTF-8'); // pasamos to' pa' minusculas, pero no esta especificado
    #regex pa determinar los caracteres
	preg_match_all('/./iu', $str, $matches); 
    #la funcion array count values nos determina la frecuencia de las letras
	$total = array_count_values($matches[0]); 
    #la lista pa' guardar to'
    $multiDimList = [];

	foreach ($total as $char => $vecesExistentes) { 
        #imprimimos el resultado bonito
        echo "El caracter '$char' pasa $vecesExistentes ". ($vecesExistentes >1 ? "veces":"vez"). "  \n";
        #asignamos en base a clave -> valor        
        $multiDimList[$char] = $vecesExistentes;
	} 
    return $multiDimList;
} 

#cadena
$str = "papasP"; 
#mostramo'
contarChars($str); 
?>
