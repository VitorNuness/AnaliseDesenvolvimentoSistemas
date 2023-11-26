<?php

require_once 'Item.php';

class Defesa extends Item
{
    /**
     * @param string $name;
     * @param int $tamanho;
     * @param string $classe;
     */
    public function __construct(string $name)
    {
        parent::__construct($name, 4, 'Defesa');
    }
}