<?php

$q = 5;
$x = 5;
$e = 2;
$soma =0;

while( $e <= $q * 2 ){
    
    $soma = $soma + pow($x, $e) / $e;
    
    printf(" %d \n", pow($x, $e) / $e );
    $e+= 2;
}
printf("Total = $soma");
