<?php

$alunos = array(
    array('matricula' => 128, 'nome' => 'Bruno'),
    array('matricula' => 456, 'nome' => 'João'),
    array('matricula' => 789, 'nome' => 'Ana'),
    array('matricula' => 321, 'nome' => 'Sarah'),
    array('matricula' => 654, 'nome' => 'Gabriel'),
    array('matricula' => 987, 'nome' => 'Carlos')
);

function pesquisar($matricula, $alunos)
{
    foreach ($alunos as $posicao => $aluno) {
        if ($aluno['matricula'] == $matricula) {
            echo "Aluno encontrado: " . $aluno['nome'] . "\n";
            echo "Posição no vetor: " . $posicao . "\n";
            return;
        }
    }
    echo "O aluno digitado não existe.\n";
}

pesquisar(987, $alunos);

?>