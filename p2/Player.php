<?php

class Player
{
    /**
     * @var string $nickname Nome do jogador;
     */
    private $nickname;
    /**
     * @var int $nivel Nivel do jogador;
     */
    private $nivel;
    /**
     * @var Inventario $inventario Inventario do jogador;
     */
    private $inventario;

    /**
     * @param string $nickname;
     * @param Inventario $inventario;
     */
    public function __construct(string $nickname, Inventario $inventario)
    {
        $this->setNickname($nickname);
        $this->setNivel(1);
        $this->setInventario($inventario);
    }

    /**
     * @return string;
     */
    public function getNickname(): string
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname;
     * @return string;
     */
    public function setNickname(string $nickname): string
    {
        return $this->nickname = $nickname;
    }

    /**
     * @return integer;
     */
    public function getNivel(): int
    {
        return $this->nivel;
    }

    /**
     * @param integer $nivel;
     * @return integer;
     */
    public function setNivel(int $nivel): int
    {
        return $this->nivel = $nivel;
    }

    /**
     * @return Inventario;
     */
    public function getInventario(): Inventario
    {
        return $this->inventario;
    }

    /**
     * @param Inventario $inventario;
     * @return Inventario;
     */
    public function setInventario(Inventario $inventario): Inventario
    {
        return $this->inventario = $inventario;
    }

    /**
     * @param Item $item;
     */
    public function coletarItem(Item $item)
    {
        if ($this->inventario->adicionar($item)) {
            return "Item: {$item->getName()} coletado.";
        }
        return "O item não foi coletado.";
    }

    /**
     * @param Item $item;
     */
    public function soltarItem(Item $item)
    {
        if ($this->inventario->remover($item)) {
            return "Você soltou o item: {$item->getName()}.";
        }
        return "Item não encontrado.";
    }

    public function subirNivel()
    {
        $this->setNivel($this->nivel += 1);
        $novaCapacidade = (int)$this->inventario->getCapacidadeMaxima() + ($this->nivel * 3);
        $this->inventario->setCapacidadeMaxima($novaCapacidade);
        return "Você subiu para o nível {$this->nivel}.";
    }
}
