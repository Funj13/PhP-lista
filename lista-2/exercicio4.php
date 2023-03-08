<?php

$q = 5;
$x = 5;

$soma =0;

for($e = 2; $e <= $q * 2; $e+= 2){
    
    $soma = $soma + pow($x, $e) / $e;
    
    printf(" %d \n", pow($x, $e) / $e );
}
printf("Total = $soma");

?>