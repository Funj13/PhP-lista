<?php

function preencherVetor1($vetor) {
    $soma = 0;
    for ($i = 0, $j = 1; $i < 10; $i++, $j += 2) {
        $vetor[$i] = $j;
        $soma += $j;
    }
    return $soma;
}

function preencherVetor2($vetor) {
    $soma = 0;
    for ($i = 0, $j = 2; $i < 10; $i++, $j += 2) {
        $vetor[$i] = $j;
        $soma += $j;
    }
    return $soma;
}

$vetor1 = array();
$vetor2 = array();
$somaImpares = preencherVetor1($vetor1);//somar os pares
$somaPares = preencherVetor2($vetor2);

echo "Vetor1: " . implode(", ", $vetor1) . "\n";
echo "Vetor2: " . implode(", ", $vetor2) . "\n";
echo "Soma dos números ímpares: " . $somaImpares . "\n";//par
echo "Soma dos números pares: " . $somaPares . "\n";//impar

?>