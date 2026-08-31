<?php
require_once "Personagem.php";

class Monstro extends Personagem {
    private string $tipo;
    private int $ataque;
    private int $recompensaXP;
    private string $tesouro;

    public function __construct(string $nome, string $tipo, int $nivel, int $vidaMaxima, int $ataque, int $recompensaXP, string $tesouro) {
        parent::__construct($nome, $nivel, $vidaMaxima);
        $this->tipo = $tipo;
        $this->ataque = $ataque;
        $this->recompensaXP = $recompensaXP;
        $this->tesouro = $tesouro;
    }

    public function interagir() {
        echo "👹 Um " . $this->tipo . " chamado " . $this->getNome() . " apareceu!<br>";
    }

    public function mostrarDados() {
        parent::mostrarDados();
        echo "Tipo: " . $this->tipo . "<br>";
        echo "Ataque: " . $this->ataque . "<br>";
        echo "Tesouro: " . $this->tesouro . "<br>";
    }

    public function atacar() {
        $dano = $this->ataque + rand(0, 4);
        echo "👊 " . $this->getNome() . " atacou causando " . $dano . " de dano!<br>";
        return $dano;
    }

    public function soltarTesouro() {
        if (!$this->estaVivo()) {
            echo "💎 " . $this->getNome() . " dropou: " . $this->tesouro . "<br>";
            return $this->tesouro;
        }
        return null;
    }

    public function getTipo() { return $this->tipo; }
    public function getAtaque() { return $this->ataque; }
    public function getRecompensaXP() { return $this->recompensaXP; }
    public function getTesouro() { return $this->tesouro; }
}
?>