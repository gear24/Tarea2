<?php



function ReverseList($data) {
    $reversed = array();
    #vamos deel ultimo al primero
    for ($a = count($data) - 1; $a >= 0; $a--) {
        array_push($reversed, $data[$a]); #append pa la lista
    }
    return($reversed); // retornamos
}

$lista = [1, 2, 3, 4];
$papas = ReverseList($lista);
// echo "La lista original era: ";
// print_r($lista);
// echo "Y la lista en reversa es: ";
// print_r($papas);
echo "La lista original era: " . implode(", ", $lista) . " y la lista en reversa es: " . implode(", ", $papas) . "\n";


?>