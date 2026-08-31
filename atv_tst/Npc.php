<?php
require_once "Personagem.php";

class NPC extends Personagem {
    private string $papel;
    private string $dialogo;

    public function __construct(string $nome, string $papel, string $dialogo) {
        parent::__construct($nome, 1, 50);
        $this->papel = $papel;
        $this->dialogo = $dialogo;
    }

    public function interagir() {
        echo "💬 " . $this->getNome() . " (" . $this->papel . "): \"" . $this->dialogo . "\"<br>";
    }

    public function mostrarDados() {
        parent::mostrarDados();
        echo "Papel: " . $this->papel . "<br>";
    }

    public function oferecerMissao() {
        echo "📜 " . $this->getNome() . " ofereceu uma missão para você!<br>";
        return "Missão: Derrote 5 goblins na floresta!";
    }

    public function getPapel() { return $this->papel; }
    public function getDialogo() { return $this->dialogo; }
}
?>