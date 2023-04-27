<?php

    printf("escreva quantos números deseja: \n");
    fscanf(STDIN, "%f", $valorFinal);
    
    function recursiva($nInicial, $nFinal) {
        
        if ($nInicial <= $nFinal) {
            printf("$nInicial \n");
            recursiva($nInicial+1, $nFinal);
        }
    }
    recursiva(0, $valorFinal);
?>