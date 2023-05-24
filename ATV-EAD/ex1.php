<?php

function vetores1(){
    
    $Vetor1 = array();
    
    
    for ($i = 0; $i < 10; $i++) {
        
        $Vetor1[$i] = $i +1;
    }
    echo "Vetor 1: " . implode(", ", $Vetor1) . "\n";
}
function vetores2(){
    
    $Vetor2 = array();
    
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2 == 0) {
            $Vetor2[$i] = $i ;
        }
    }
    echo "Vetor par: " . implode(", ", $Vetor2) . "\n";
    
}
function vetores3(){
    
        $Vetor3 = array();
        
        for ($i = 0; $i < 10; $i++) {
            if ($i % 2 == 1) {
                $Vetor3[$i] = $i ;
            } 
        }
        echo "Vetor impar: " . implode(", ", $Vetor3) . "\n";
        
    }

vetores1();
vetores2();
vetores3();

?>