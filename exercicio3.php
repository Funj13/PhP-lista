<?php

    $a = 2;
    $b = 10;
    $c = -2;
    
    $Delta = $b * $b - 4 * $a * $c;
    
    $x1 = -$b +sqrt($Delta) / (2 * $a);
    $x2 = -$b -sqrt($Delta) / (2 * $a);
    
    echo "X1 é: $x1 \n";
    echo "X2 é: $x2 \n";

?>
