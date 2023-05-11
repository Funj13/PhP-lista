<?php

function vetor1($vetor) {
    for ($i = 0; $i < 10; $i++) {
        $vetor[$i] = $i + 1;
    }
    echo "Vetor 1: " . implode(", ", $vetor) . "\n";//1  a 10
}

function vetores2e3($vetor2, $vetor3) {
    for ($i = 0; $i < 10; $i++) {
        if (($i + 1) % 2 == 0) {
            $vetor2[] = $i + 1;
        } else {
            $vetor3[] = $i + 1;
        }
    }
    echo "Vetor 2: " . implode(", ", $vetor2) . "\n";//par
    echo "Vetor 3: " . implode(", ", $vetor3) . "\n";//impar
}

$vetor1 = array();
$vetor2 = array();
$vetor3 = array();

vetor1($vetor1);
vetores2e3($vetor2, $vetor3);

?>