<?php






function sumPares($data){
    $sum = 0;
    for ($i=0; $i < count($data); $i++) { 
        ($data[$i] % 2 == 0 ? $sum+=$data[$i]:"");
    }
    return $sum;

}
$nums = [1,2,3,4,5,6,7,8,9,10];
$total = sumPares($nums);
print("La suma total de los numeros pares da $total")

?>