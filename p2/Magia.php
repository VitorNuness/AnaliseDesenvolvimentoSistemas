<?php

require_once 'Item.php';

class Magia extends Item
{
    /**
     * @param string $name;
     * @param int $tamanho;
     * @param string $classe;
     */
    public function __construct(string $name)
    {
        parent::__construct($name, 2, 'Magia');
    }
}