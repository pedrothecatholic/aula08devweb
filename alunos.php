<?php

function calcularMedia(array $turma)
{
    $soma = 0;
    foreach ($turma as $aluno) {
        $soma = $soma + $aluno["nota"];
    }

    $media = $soma / count($turma);
    return $media;
}

function alunoComMaiorNota(array $turma)
{

    $melhorAluno = null;
    foreach ($turma as $aluno) {
        if ($melhorAluno == null) {
            $melhorAluno = $aluno;
        } elseif ($aluno["nota"] > $melhorAluno["nota"]) {
            $melhorAluno = $aluno;
        }
    }

    return $melhorAluno;
}

function alterarNotaAluno(array $turma, $nome, $novaNota){

    foreach($turma as $aluno){
        if($aluno["nome"] == $nome){
           $aluno["nota"] == $novaNota;
           break;
        }
    }

}

$alunos = [
    "1" => [
        "nome" => "Maria ",
        "idade" => 16,
        "nota" => 85
    ],
    "2" => [
        "nome" => "Artur ",
        "idade" => 16,
        "nota" => 92
    ],
    "3" => [
        "nome" => "Gustavo ",
        "idade" => 16,
        "nota" => 80
    ],
    "4" => [
        "nome" => "Isabela ",
        "idade" => 17,
        "nota" => 95
    ]
];


//imprimir na tela a média das notas de todos os alunos
$media = calcularMedia($alunos);

echo "A média da sala é: $media";

echo "<br><br>";

$melhorAluno = alunoComMaiorNota($alunos);

echo " Melhor estudante é " . $melhorAluno["nome"] . " com a nota " . $melhorAluno["nota"] . ".";

echo "<br><br>";

$alunosTurmaB = [
    "1" => [
        "nome" => "Kelly ",
        "idade" => 17,
        "nota" => 100
    ],
    "2" => [
        "nome" => "Paulo ",
        "idade" => 16,
        "nota" => 85
    ],
    "3" => [
        "nome" => "Gabriel ",
        "idade" => 16,
        "nota" => 82
    ],
    "4" => [
        "nome" => "Mateus ",
        "idade" => 16,
        "nota" => 83
    ],
    "5" => [
        "nome" => "Bruna ",
        "idade" => 16,
        "nota" => 90
    ]
];


$mediaTurmaB = calcularMedia($alunosTurmaB);

echo "A média dos alunos da turma B é: $mediaTurmaB";

echo "<br><br>";

$melhorAluno = alunoComMaiorNota($alunos);

echo " Melhor estudante é " . $melhorAluno["nome"] . " com a nota " . $melhorAluno["nota"] . ".";

echo "<br><br>";

//escreva uma função que altere a nota de um aluno específico


//escreva uma função que inclua a situação de todos os alunos

//caso a nota for menor que 50, situação = reprovado

//caso a nota for maior ou igual que 50, situação = aprovado