<?php 
/*Crie um programa usando funções que vai ajudar a unimar
a abrir salas de ADS para o próximo ano.
Vamos precisar considerar o número de turmas,
o número de salas, mesas por sala, um computador por aluno
e os custos, por sala e total.

Custo por computador: R$3000
Custo por mesa: R$500
Cada turma tem no máximo 50 alunos
As salas tem 5 colunas por 10 fileiras (se a turma encher)
Cada mesa cabem dois computadores (dois alunos).

A função principal deve retornar um array com outros
arrays internos (um por turma que abrir), mais as
informações gerais de custo. Exemplo:

Alunos: 90
Retorno:
Array(
    "custoTotal":x,
    "salas":2,
    "turmas":array(
        "alunos":50,
        "computadores":50,
        "mesas":25,
        "custo":x
    )
)*/

// total de alunos
// total de turmas e salas
function newTurma()
{
    return array(
        "alunos" => 0,
        "computadores" => 0,
        "mesas" => 0,
        "custo" => 0,
    );
}

function tamanhoSala($colunas, $fileiras)
{
    return $colunas * $fileiras;
}

function valorTotalMesas($qntMesas, $valorMesa)
{
    return $valorMesa * $qntMesas;
}

function valorTotalComputadores($qntComputadores, $valorComputador)
{
    return $valorComputador * $qntComputadores;
}

$alunos = 310;
$colunas = 5;
$fileiras = 10;
$valorMesa = 500;
$valorComputador = 3000;
$maxSala = tamanhoSala($colunas, $fileiras);
$mesas = $maxSala / 2;
$computadores = $mesas * 2;

$turmas = array(
    "custoTotal" => 0,
    "salas" => 0,
    "turmas" => array(),
);

while ($alunos > 0)
{
    $turmas["salas"]++;
    $turma = newTurma();
    while ($turma["alunos"] < $maxSala && $alunos > 0)
    {
        $turma["alunos"]++;
        $alunos--;
    }
    $turma["mesas"] = $mesas;
    $turma["computadores"] = $turma["alunos"];
    $turma["custo"] = valorTotalMesas($mesas, $valorMesa) + valorTotalComputadores($turma["computadores"], $valorComputador);
    array_push($turmas["turmas"], $turma);
    $turmas["custoTotal"] += $turma["custo"];
}   

foreach($turmas["turmas"] as $turma => $chaves) {
    echo "<strong>Turma ".$turma + 1 .":</strong> <br>";
    foreach ($chaves as $chaves => $valor) {
        echo "<strong>$chaves</strong>: $valor<br>";
    }
    echo "<br>";
}

var_dump($turmas);

// total de mesas por sala
// total de computadores por aluno
// custo por sala
// custo total

?>