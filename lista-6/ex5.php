<?php

    printf("escreva nome: \n");
    fscanf(STDIN, "%s", $nome);
    
    function recursiva($i, $n) {
        $nome = "nome";
        
        if ($i <= $n) {
            printf("$i  $nome \n");
            recursiva(++$i, $n);
        }
    }
    recursiva(0, 20);


?>