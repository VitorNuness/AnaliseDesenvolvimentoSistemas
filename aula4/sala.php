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

$alunoFixo = $_GET['alunos'] ?? 0;
$alunos = $alunoFixo;
$colunas = 5;
$fileiras = 10;
$valorMesa = 500;
$valorComputador = 3000;
$maxSala = tamanhoSala($colunas, $fileiras);
$mesas = $maxSala / 2;
$computadores = $mesas * 2;

$turmas = array(
    "custoTotal" => 0,
    "totalComputadores" => 0,
    "totalMesas" => 0,
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
    $turmas["totalComputadores"] += $turma["computadores"];
    $turmas["totalMesas"] += $turma["mesas"];
}   

// var_dump($turmas);

// total de mesas por sala
// total de computadores por aluno
// custo por sala
// custo total

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala</title>
    <style>

    </style>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="alunos">Digite a quantidade de alunos:</label><br />    
        <input type="number" name="alunos" id="alunos" value="<?=$alunoFixo?>">
        <input type="submit" value="Calcular">
    </form>
    <h2>Totais</h2>
    <p><strong>Custo Total</strong> : R$ <?=number_format($turmas["custoTotal"], 2, ',', '.')?></p>
    <ul>
        <li><strong>Total Mesas</strong>: <?=$turmas["totalMesas"]?></li>
        <li><strong>Total Computadores</strong>: <?=$turmas["totalComputadores"]?></li>
    </ul>
    <p><strong>Total de Salas</strong> : <?=$turmas["salas"] ?? 0?></p>
    <?php 
        foreach($turmas["turmas"] as $turma => $chaves) {
            echo "<h3>Turma ".$turma + 1 .":</h3>";
            foreach ($chaves as $chaves => $valor) {
                if ($chaves == "custo")
                {
                    echo "<li><strong>$chaves</strong>: R$". number_format($valor, 2, ',', '.');
                    echo "</br>";
                }
                else {
                    echo "<li><strong>$chaves</strong>: $valor<br>";
                }
            }
            echo "<br>";
        }
    ?>
</body>
</html>