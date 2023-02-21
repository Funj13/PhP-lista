<?php

    $desconto1 = 10;
    $desconto2 = 20;
    
    $arroz = 10;
    $feijao = 5;
    $acucar = 20;
    $macarrao = 8;
    $gas = 60;
    
    $valor = $arroz + $feijao + $acucar + $macarrao + $gas;
    
    echo "C o m p r a s \n";
    echo "---------------\n";
    echo "Arroz = $arroz \n";
    echo "Acucar = $acucar \n";
    echo "Feijao = $feijao \n";
    echo "Macarrao = $macarrao \n";
    echo "Gás = $gas \n";
    echo "================ \n";

    if ($valor >= 100) {
        $desconto = $valor * ($desconto2 / 100);
        
        $total = $valor - $desconto;
        
        echo "20% \n";
        
        echo "Total = $total \n";
        
    }else{
        $desconto = $valor * ($desconto1 / 100);
        
        $total = $valor - $desconto;
        
        echo "10% \n";
        
        echo "Total = $total \n";
        
    }
?>
