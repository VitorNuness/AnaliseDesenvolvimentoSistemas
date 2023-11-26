<?php

class Item
{
    /**
     * @var string $name Nome do item
     */
    protected $name;
    /**
     * @var int $tamanho Quantos espaçoes o item ocupa
     */
    protected $tamanho;
    /**
     * @var string $classe Classe do item
     */
    protected $classe;

    /**
     * @param string $name;
     * @param int $tamanho;
     * @param string $classe;
     */
    public function __construct(string $name, int $tamanho, string $classe)
    {
        $this->setName($name);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    /**
     * @return string;
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name;
     * @return string;
     */
    public function setName(string $name) : string
    {
        return $this->name = $name;
    }

    /**
     * @return int;
     */
    public function getTamanho() : int
    {
        return $this->tamanho;
    }

    /**
     * @param int $tamanho;
     * @return int;
     */
    public function setTamanho(int $tamanho) : int
    {
        return $this->tamanho = $tamanho;
    }

    /**
     * @return string;
     */
    public function getClasse() : string
    {
        return $this->classe;
    }

    /**
     * @param string $classe;
     * @return string;
     */
    public function setClasse(string $classe) : string
    {
        return $this->classe = $classe;
    }
}
