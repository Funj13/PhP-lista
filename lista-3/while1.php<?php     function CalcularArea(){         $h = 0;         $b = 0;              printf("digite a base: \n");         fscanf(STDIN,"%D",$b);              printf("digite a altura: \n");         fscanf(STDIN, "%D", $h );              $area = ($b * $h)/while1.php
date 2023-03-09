<?php
    function CalcularArea(){
        $h = 0;
        $b = 0;
    
        printf("digite a base: \n");
        fscanf(STDIN,"%D",$b);
    
        printf("digite a altura: \n");
        fscanf(STDIN, "%D", $h );
    
        $area = ($b * $h) / 2;
    
        printf("Á área é: $area \n");
    }
?>
