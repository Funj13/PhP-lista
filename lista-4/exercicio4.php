<?php

$q = 5;
$x = 5;
$e = 2;
$soma =0;

    do{
    
        $e+= 2;
        
        $soma = $soma + pow($x, $e) / $e;
        
        printf(" %d \n", pow($x, $e) / $e );
    
    }while( $e <= $q * 2 );
        
        printf("Total = $soma");