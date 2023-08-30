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
$colunasFixo = $_GET['colunas'] ?? 0;
$colunas = $colunasFixo;
$fileirasFixo = $_GET['fileiras'] ?? 0;
$fileiras = $fileirasFixo;
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
    <title>Orçamento</title>
    <style>
        body {
            font: normal 24px Arial;
            color: white;
            text-align: center;
            background-color: #087E8B;
        }
        h1 {
            font: bold 32px Arial;
        }
        section#principal {
            color: black;
            background-color: #ffff;
            margin: auto;
            padding: 10px;
            border-radius: 10px;
            max-width: 800px;
        }
        label {
            color: #087E8B;
            font: bold 24px Arial;
        }
        input.input {
            font: normal 24px Arial;
            width: 75px;
            height: 28px;
            text-align: center;
            font-weight: 20;
            margin: 10px;
            border-radius: 10px;
            border-width: 1px;
            border-color: gray;
            border-style: solid;
        }
        input#submit {
            background-color: #19AE02;
            font: normal 20px Arial;
            color: white;
            border-radius: 10px;
            width: 200px;
            height: auto;
            border-style: none;
            padding: 5px;
            cursor: pointer
            
        }
        input#submit:hover {
            opacity: 0.7;
        }
        h2 {
            color: #087E8B;
            font: bold 28px Arial;
        }
        p span#destaque {
            font: bold 24px Arial;
            color: #087E8B;
        }
        ul li span#destaque {
            font: bold 24px Arial;
        }
        li {
            list-style: none;
        }
        div#custoTotal {
            background-color: #EFEFEF;
            color: #087E8B;
            padding: auto;
            max-width: 400px;
            border-radius: 10px;
            border-color: #087E8B;
            border-style: solid;
            border-width: 1px;
            margin: auto;
        }
        div#totaisItems {
            color: #087E8B;
            max-width: 400px;
            margin: auto;
            padding: 0;
        }
        p#detalhes {
            color: white;
        }
        span#detalhes {
            font: bold 24px Arial;
            color: #FFFFFF;
        }
        p {
            color: #087E8B;
        }
        div#listaTurmas {
            background-color: #EFEFEF;
            color: #087E8B;
            padding: auto;
            max-width: 400px;
            border-radius: 10px;
            border-color: #087E8B;
            border-style: solid;
            border-width: 1px;
            margin: auto;
        }
    </style>
</head>
<body>
    <h1>Orçamento</h1>
    <p id="detalhes">Gere seu orçamento de classe abaixo.<br> Preencha a quantidade de <strong>colunas</strong> e <strong>fileiras</strong> que cada sala irá ocupar,<br> e o <strong>total de alunos</strong> da sua instituição.</p>
    <section id="principal">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="colunas">Colunas:</label>
            <input name="colunas" id="colunas" class="input" placeholder="0" value="<?=$colunasFixo?>">
            <label for="fileiras">Fileiras:</label>
            <input name="fileiras" id="fileiras" class="input" placeholder="0" value="<?=$fileirasFixo?>"></br>
            <label for="alunos">Alunos:</label>
            <input name="alunos" id="alunos" class="input" placeholder="0" value="<?=$alunoFixo?>"></br>
            <input id="submit" type="submit" value="Calcular">
        </form>
        <h2>Totais</h2>
        <div id="custoTotal">
            <p><span id="destaque">Custo Total</span>: R$ <?=number_format($turmas["custoTotal"], 2, ',', '.')?></p>
        </div>
        <div id="totaisItems">
            <ul>
                <li><span id="destaque"><span id="item">Total Mesas:</span></span> <span id="valor"><?=$turmas["totalMesas"]?></span></li>
                <li><span id="destaque"><span id="item">Total Computadores:</span></span> <span id="valor"><?=$turmas["totalComputadores"]?></span></li>
            </ul>
        </div>
        <p><span id="destaque">Total de Salas</span> : <?=$turmas["salas"] ?? 0?></p>
        <p>Detalhes</p>
        <div id="listaTurmas">
            <?php
                foreach($turmas["turmas"] as $turma => $chaves) {
                    echo "<h3 id='turmas'>Turma ".$turma + 1 .":</h3>";
                    foreach ($chaves as $chaves => $valor) {
                        if ($chaves == "custo")
                        {
                            echo "<li id='item'><span id='destaque'>$chaves</span>: R$ ". number_format($valor, 2, ',', '.');
                            echo "</br>";
                        }
                        else {
                            echo "<li id='item'><span id='destaque'>$chaves</span>: $valor<br>";
                        }
                    }
                    echo "<br>";
                }
            ?>
        </div>

    </section>
</body>
</html>