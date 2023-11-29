<?php

require_once 'Player.php';
require_once 'Inventario.php';
require_once 'Ataque.php';
require_once 'Defesa.php';
require_once 'Magia.php';

$inventario = new Inventario();

$player = new Player('20Matar70Correr', $inventario);

$espadaDeFerro = new Ataque('Espada de Ferro');
$espadaDeOuro = new Ataque('Espada de Ouro');

$bastaoDeMadeira = new Ataque ('Bastão de Madeira');
$bastaoDeTitanio = new Ataque ('Bastão de Titânio');

$escudoDeMadeira = new Defesa('Escudo de Madeira');
$escudoDeAco = new Defesa('Escudo de Aço');
$escudoDeFerro = new Defesa('Escudo de Ferro');
$escudoDeOuro = new Defesa('Escudo de Ouro');

$capaceteDeFerro = new Defesa('Capacete de Ferro');
$capaceteDeOuro = new Defesa('Capacete de Ouro');
$tunicaDeCouro = new Defesa('Túnica de Couro');
$peitoralDeFerro = new Defesa('Peitoral de Ferro');
$peitoralDeOuro = new Defesa('Peitoral de Ouro');
$botasDeCouro = new Defesa('Botas de Couros');
$botasDeFerro = new Defesa('Botas de Ferro');
$botasDeOuro = new Defesa('Botas de Ouro');

$varinhaBasica = new Magia('Varinha Básica');
$varinhaIntermediaria = new Magia('Varinha Intermediária');
$varinhaDoMestre = new Magia('Varinha do Mestre');

echo "Jogador: <strong>". $player->getNickname() ."</strong> Nível: <strong>". $player->getNivel() ."</strong>.<hr>";
echo $player->coletarItem($espadaDeFerro). "<br>";
echo $player->coletarItem($espadaDeOuro). "<br>";
echo $player->coletarItem($bastaoDeMadeira). "<br>";
echo $player->coletarItem($tunicaDeCouro). "<br>";
echo $player->coletarItem($botasDeCouro). "<br>";
echo $player->coletarItem($bastaoDeTitanio). "<br>";
echo $inventario->capacidadeLivre(). "<br>";
echo $player->subirNivel(). "<br>";
echo $inventario->capacidadeLivre(). "<br>";
echo $player->coletarItem($capaceteDeFerro). "<br>";
echo $player->coletarItem($peitoralDeFerro). "<br>";
echo $player->coletarItem($botasDeFerro). "<br>";
echo $player->coletarItem($varinhaBasica). "<br>";
echo $inventario->capacidadeLivre(). "<br>";
echo $player->soltarItem($espadaDeFerro). "<br>";
echo $inventario->capacidadeLivre(). "<br>";
echo $player->soltarItem($espadaDeFerro). "<br>";
// echo $player->soltarItem($espada);

// var_dump($inventario);
