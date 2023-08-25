<?php 

/*Crie um programa usando funções que vai ajudar
a unimar a definir a compra de computadores para
uma sala e o seu custo total. Todas as salas são 
quadradas e respeitam um formato de grid, ou seja,
x fileiras por y colunas. O seu papel é criar 
funções que ajudem a definir quantos computadores
uma sala terá e qual o investimento total a ser 
feito.*/

function totalComputadores($fileiras, $colunas) 
{
   return $fileiras * $colunas;
}

function valorTotalComputadores($totalComputadores, $valorComputador) 
{
    return $valorComputador * $totalComputadores;
}

$fileiras = 10;
$colunas = 10;
$valorComputador = 3000;

$nmrComputadores = totalComputadores($fileiras, $colunas);
$totalCompra = valorTotalComputadores($nmrComputadores, $valorComputador);

echo "<strong>Total de computadores:</strong> $nmrComputadores<br/>";
echo "<strong>Valor unitário:</strong> R$ ". number_format($valorComputador, 2, ",", ".")."</br></br>";
echo "<strong>Total da compra:</strong> R$ ". number_format($totalCompra, 2, ",", ".")."</br>";

?>