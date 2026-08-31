<?php
abstract class Personagem {
    private string $nome;
    private int $nivel;
    private int $vida;
    private int $vidaMaxima;
    private int $experiencia;

    public function __construct(string $nome, int $nivel, int $vidaMaxima) {
        $this->nome = $nome;
        $this->nivel = $nivel;
        $this->vidaMaxima = $vidaMaxima;
        $this->vida = $vidaMaxima;
        $this->experiencia = 0;
    }

    public function mostrarDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Nível: " . $this->nivel . "<br>";
        echo "Vida: " . $this->vida . "/" . $this->vidaMaxima . "<br>";
        echo "Experiência: " . $this->experiencia . "<br>";
    }

    public abstract function interagir();

    public function receberDano(int $dano) {
        $this->vida -= $dano;
        if ($this->vida < 0) {
            $this->vida = 0;
        }
        echo $this->nome . " recebeu " . $dano . " de dano. Vida atual: " . $this->vida . "<br>";
        if ($this->vida == 0) {
            echo "💀 " . $this->nome . " foi derrotado!<br>";
        }
    }

    public function estaVivo() {
        return $this->vida > 0;
    }

    public function ganharExperiencia(int $xp) {
        $this->experiencia += $xp;
        echo "✨ " . $this->nome . " ganhou " . $xp . " pontos de experiência!<br>";
        
        while ($this->experiencia >= 100) {
            $this->experiencia -= 100;
            $this->subirNivel();
        }
    }

    private function subirNivel() {
        $this->nivel++;
        $this->vidaMaxima += 20;
        $this->vida = $this->vidaMaxima;
        echo "🎉 " . $this->nome . " subiu para o nível " . $this->nivel . "!<br>";
    }

    // Getters e Setters
    public function getNome() { return $this->nome; }
    public function getNivel() { return $this->nivel; }
    public function getVida() { return $this->vida; }
    public function getVidaMaxima() { return $this->vidaMaxima; }
    public function getExperiencia() { return $this->experiencia; }
    public function setVida(int $vida) { $this->vida = $vida; }
}
?>