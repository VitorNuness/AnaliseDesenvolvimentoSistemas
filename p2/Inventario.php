<?php

class Inventario
{
    /**
     * @var int $capacidadeMaxima Limite de itens do inventario
     */
    private $capacidadeMaxima;
    /**
     * @var array<Item> $itens Itens armazenados no inventario
     */
    private $itens;

    public function __construct()
    {
        $this->setCapacidadeMaxima(20);
        $this->itens = array();
    }

    /**
     * @return int;
     */
    public function getCapacidadeMaxima() : int
    {
        return $this->capacidadeMaxima;
    }

    /**
     * @param int $capacidadeMaxima
     * @return int;
     */
    public function setCapacidadeMaxima(int $capacidadeMaxima) : int
    {
        return $this->capacidadeMaxima = $capacidadeMaxima;
    }

    /**
     * @param Item $item;
     */
    public function adicionar(Item $item)
    {
        if ($item->getTamanho() <= $this->capacidadeLivre()) {
            array_push($this->itens, $item);
            return True;
        }
        return False;
    }

    /**
     * @param Item $item;
     */
    public function remover(Item $item)
    {
        $index = 0;

        foreach ($this->itens as $i) {
            if ($item->getName() == $i->getName()) {
                unset($this->itens[$index]);
                return True;
            }
            $index++;
        }
        return False;
    }

    /**
     * @return int;
     */
    public function capacidadeLivre() : int
    {
        $utilizado = 0;
        foreach ($this->itens as $item) {
            $utilizado += (int)$item->getTamanho();
        }
        return (int)$this->getCapacidadeMaxima() - $utilizado;
    }
}