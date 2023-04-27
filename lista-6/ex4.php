<?php

    printf("Par \n");
    //par
    
    function recursivaPar($n) {
        if ($n != 0) {
            printf("$n \n");
            recursivaPar($n-2);
        }
    }
    recursivaPar(10);
    
    printf("Impar \n");
    //impar
    
    function recursivaImpar($n) {
        if ($n != 0 > $n) {
            printf("$n \n");
            recursivaImpar($n-3);
        }
    }
    recursivaImpar(10);
    
?>