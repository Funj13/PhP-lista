
<?php

$multiplicador = 1;

 do{
    $multiplicando = 1;

     do{
        $resultado = $multiplicador * $multiplicando;
        
        printf( " $multiplicador x $multiplicando = $resultado \n");
        
        $multiplicando++;
    
       
    
    }while ($multiplicando <= 10);
    
    printf("\n");
    
    $multiplicador++;

 }while ($multiplicador <= 10);
 
?>