<?php

$pessoas = array();

for ($i = 1; $i < 4; $i++) {
    printf("Digite o seu nome: ");
    fscanf(STDIN, "%s", $nome);
    printf("Digite a idade: ");
    fscanf(STDIN, "%d", $idade);
    $pessoa = array('nome' => $nome, 'idade' => $idade);
    $pessoas[] = $pessoa;
}//entrada

foreach ($pessoas as $posicao => $pessoa) {
    if ($pessoa['idade'] >= 18) {
        printf("Posição %d: %s, %d anos\n", $posicao, $pessoa['nome'], $pessoa['idade']);
    }//saida
}

?>