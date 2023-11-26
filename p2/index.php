<?php

require_once 'Player.php';
require_once 'Inventario.php';
require_once 'Ataque.php';
require_once 'Defesa.php';
require_once 'Magia.php';

$inventario = new Inventario();

$player = new Player('20Matar70Correr', $inventario);

$espada = new Ataque('Espada');

$escudo = new Defesa('Escudo');

$varinha = new Magia('Varinha');

echo $player->coletarItem($espada);
echo $player->soltarItem($espada);

// var_dump($inventario);
