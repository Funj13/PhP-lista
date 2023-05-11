<?php

$alunos = array();
for ($i = 1; $i <= 5; $i++) {
    printf("Digite o nome do aluno: ");
    fscanf(STDIN, "%s", $nome); //entrada
    
    $notas = array();
    for ($j = 1; $j <= 3; $j++) {
        printf("Digite a nota %d: ", $j);
        fscanf(STDIN, "%d", $nota);
        $notas[] = $nota;
    }
    
    $media = array_sum($notas) / count($notas); //media
    $aluno = array('nome' => $nome, 'notas' => $notas, 'media' => $media);
    $alunos[] = $aluno;
}

foreach ($alunos as $aluno) {
    printf("Aluno: %s\nNotas: %s\nMédia: %.2f\n", $aluno['nome'], implode(", ", $aluno['notas']), $aluno['media']); //imprimir aluno media
}

$maior = $alunos[0];
$menor = $alunos[0];
foreach ($alunos as $aluno) {
    if ($aluno['media'] > $maior['media']) {
        $maior = $aluno;
    }
    if ($aluno['media'] < $menor['media']) {
        $menor = $aluno;
    }
}

printf("Aluno com a maior média: %s (média %.2f)\n", $maior['nome'], $maior['media']);
printf("Aluno com a menor média: %s (média %.2f)\n", $menor['nome'], $menor['media']);

?>