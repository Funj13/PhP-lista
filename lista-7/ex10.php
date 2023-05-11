<?php

$veiculo = array();
$placa = array();
$lis = 0;
$pesq = 0;

printf("Digite o tamanho da lista de veículos que deseja:\n");fscanf(STDIN, "%d\n", $lis);//entrada quantidades

for ($i = 0; $i < $lis; $i++) {
    printf("Digite o veículo:\n");fscanf(STDIN, "%s\n", $veiculo[$i]);
    printf("Digite a placa do veículo:\n");fscanf(STDIN, "%d\n", $placa[$i]);
}//entrada

printf("Digite a placa do veículo que deseja pesquisar:\n");fscanf(STDIN, "%d\n", $pesq);//entrada pesquisa

for ($i = 0; $i < $lis; $i++){
    if ($pesq == $placa[$i]) {
        printf("Veículo encontrado: %s\n", $veiculo[$i]);
        break;
    }
}//saida


?>