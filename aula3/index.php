<?php 
    echo "Hello World! <br>";
    echo "<strong>Unimar</strong> ADS 2023.<br>";

    $idade = 17;

    if ($idade >= 18) {
        echo "Você é maior de idade.<br>";
    } else {
        echo "Você é menor de idade.<br>";
    };
  
    $numero = 0;

    if ($numero > 0) {
        echo "O número é positivo.<br>";
    } elseif ($numero < 0) {
        echo "O número é negativo.<br>";
    } else {
        echo "O número é zero.<br>";
    };

    $i = 0;

    while ($i <= 10) {
        echo "{$i}<br>";
        $i++;
    };

    
    for ($i = 0; $i <= 10; $i++) {
        echo "{$i}<br>";
    };

    for ($i = 10; $i >= 0; $i--) {
        echo "{$i}<br>";
    };

    $lista = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    echo "O tamanho do array é ". count($lista) .".<br>";
    echo "O tamanho do array é ". sizeof($lista) .".<br>";

    for ($i = 0; $i < count($lista); $i++) {
        echo "Elemento: {$lista[$i]}<br>";
    };

    foreach($lista as $elemento) {
        echo "Usando foreach {$elemento}<br>";
    };

    echo "<h3>Aluno array</h3>";

    $aluno = array(
        "nome" => "Vitor",
        "idade" => "21",
        "curso" => "Análise e Desenvolvimento de Sistemas",
        "disciplina" => "Programação Orientada a Obajetos",
        "ie" => "Unimar",
    );

    echo "Esse é o aluno: <br>";

    foreach($aluno as $chave => $valor) {
        echo "<strong>{$chave}:</strong> {$valor} <br>";
    };

    var_dump($aluno);

    echo "<pre>";
    echo json_encode($aluno);
    echo "</pre>";
?>