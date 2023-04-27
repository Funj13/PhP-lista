<?php

    function factorial($n){
        
        if ($n == 0) {
            
            return 1;
            
        } else {
            
            return $n * factorial($n - 1);
            
        }
        
    }
    
    $total = factorial(6);
    
    printf($total);

?>