<?php

$prod = array();
$valor = array();
$ctotal = 0;

for ($i = 0; $i < 5; $i++) {
    printf("Digite o produto:\n");
    fscanf(STDIN, "%s\n", $prod[$i]);
    printf("Digite o valor unitário:\n");
    fscanf(STDIN, "%d\n", $valor[$i]);
}//entrada

for ($i = 0; $i < 5; $i++) {
    printf("Produto: $prod[$i]\nValor: $valor[$i]\n");
    $ctotal += $valor[$i];
}//calcular total

printf("Valor total da compra: $ctotal");//imprimir total

?>
