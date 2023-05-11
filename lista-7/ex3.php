<?php

$numeros = array(4, 7, 1, 9, 2, 6, 5, 8, 3, 10);

echo "Sequência digitada: " . implode(" ", $numeros);// sequencia de numeros

$maior = max($numeros);
$posicaoMaior = array_search($maior, $numeros);// procurar array

echo "\nO maior elemento é $maior e está na posição de índice $posicaoMaior.";

$menor = min($numeros);
$posicaoMenor = array_search($menor, $numeros);

echo "\nO menor elemento é $menor e está na posição de índice $posicaoMenor.";

?>