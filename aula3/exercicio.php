<!-- 
Criar uma array com cinco alunos

Exemplo:
$aluno = array(
        "nome" => "Vitor",
        "idade" => "21",
        "curso" => "Análise e Desenvolvimento de Sistemas",
        "disciplina" => "Programação Orientada a Objetos",
        "ie" => "Unimar",
    );
-->
<?php
$turma = array();

$aluno1 = array(
    "nome" => "Vitor",
    "idade" => "21",
    "curso" => "Análise e Desenvolvimento de Sistemas",
    "disciplina" => "Programação Orientada a Objetos",
    "ie" => "Unimar",
);

$aluno2 = array(
    "nome" => "Maria",
    "idade" => "21",
    "curso" => "Análise e Desenvolvimento de Sistemas",
    "disciplina" => "Programação Orientada a Objetos",
    "ie" => "Unimar",
);

$aluno3 = array(
    "nome" => "Pedro",
    "idade" => "21",
    "curso" => "Análise e Desenvolvimento de Sistemas",
    "disciplina" => "Programação Orientada a Objetos",
    "ie" => "Unimar",
);

$aluno4 = array(
    "nome" => "João",
    "idade" => "21",
    "curso" => "Análise e Desenvolvimento de Sistemas",
    "disciplina" => "Programação Orientada a Objetos",
    "ie" => "Unimar",
);

$aluno5 = array(
    "nome" => "Marcos",
    "idade" => "21",
    "curso" => "Análise e Desenvolvimento de Sistemas",
    "disciplina" => "Programação Orientada a Objetos",
    "ie" => "Unimar",
);

array_push($turma, $aluno1, $aluno2, $aluno3, $aluno4, $aluno5);

foreach($turma as $turma => $alunos) {
    echo "<strong>Aluno ".$turma + 1 .":</strong> <br>";
    foreach ($alunos as $aluno => $valor) {
        echo "<strong>$aluno</strong>: $valor<br>";
    }
    echo "<br>";
};
