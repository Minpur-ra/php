<?php
require_once "Personagem.php";

class Aventureiro extends Personagem {
    private string $classe;
    private string $raca;
    private int $mana;
    private int $manaMaxima;
    private array $inventario = [];

    public function __construct(string $nome, string $classe, string $raca, int $nivel, int $vidaMaxima, int $manaMaxima) {
        parent::__construct($nome, $nivel, $vidaMaxima);
        $this->classe = $classe;
        $this->raca = $raca;
        $this->manaMaxima = $manaMaxima;
        $this->mana = $manaMaxima;
    }

    public function interagir() {
        echo "⚔️ " . $this->getNome() . " o " . $this->raca . " " . $this->classe . " está pronto para a aventura!<br>";
    }

    public function mostrarDados() {
        parent::mostrarDados();
        echo "Classe: " . $this->classe . "<br>";
        echo "Raça: " . $this->raca . "<br>";
        echo "Mana: " . $this->mana . "/" . $this->manaMaxima . "<br>";
        echo "Inventário: " . count($this->inventario) . " itens<br>";
    }

    public function atacar() {
        $dano = $this->getNivel() * 8 + rand(1, 6);
        echo "🗡️ " . $this->getNome() . " atacou causando " . $dano . " de dano!<br>";
        return $dano;
    }

    public function usarMagia() {
        if ($this->mana >= 20) {
            $this->mana -= 20;
            $dano = $this->getNivel() * 15 + rand(1, 10);
            echo "🔮 " . $this->getNome() . " lançou uma magia causando " . $dano . " de dano!<br>";
            return $dano;
        } else {
            echo "❌ Mana insuficiente para lançar magia!<br>";
            return 0;
        }
    }

    public function recuperarMana() {
        $this->mana = $this->manaMaxima;
        echo "🔄 Mana de " . $this->getNome() . " foi completamente restaurada!<br>";
    }

    public function adicionarItem(string $item) {
        $this->inventario[] = $item;
        echo "📦 " . $this->getNome() . " encontrou: " . $item . "<br>";
    }

    public function getClasse() { return $this->classe; }
    public function getRaca() { return $this->raca; }
    public function getMana() { return $this->mana; }
    public function getManaMaxima() { return $this->manaMaxima; }
    public function getInventario() { return $this->inventario; }
}
?>