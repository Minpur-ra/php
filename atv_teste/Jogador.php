<?php 
require_once 'Personagem.php';


class Jogador extends Personagem{
    private string $classe;
    private int $mana;
    private int $manaMaxima;

    public function __construct(string $nome, int $nivel, int $vida, int $vidaMaxima, string $classe, int $mana, int $manaMaxima){
        parent::__construct($nome, $nivel, $vida, $vidaMaxima);
        $this->classe = $classe;
        $this->mana = $mana;
        $this->manaMaxima = $manaMaxima;
        
    }
    public function interagir(){
        echo "A " . $this->classe . " " . $this->getNome() . " está pronta <br> <br>";

    }
    public function mostrarDados(){
        parent::mostrarDados();
        echo "Classe: " . $this->classe . "<br> <br>";
        echo "Mana: " . $this->mana . "<br> <br>";
        echo "Mana Maxima: " . $this->manaMaxima. "<br> <br>";

    }

    public function atacar(){
        $dano = $this->getNivel() * 10;
        echo " " . $this->getNome() . " dá " . $dano . " de dano <br> <br>";
        return $dano;

    }

    public function usarHabilidade(){
        if($this->mana >= 30){
            $dano = $this->getNivel() * 20;
            $this->mana -= 30;
            echo " " . $this->getNome() . " usou uma habilidade e causou " . $dano . " de dano <br> <br>";
            return $dano;
        }else{
            echo "você não possui mana suficiente. <br> <br>";
            return 0;
        }

    }

    public function recuperarMana(){
        $this->mana = $this->manaMaxima;

    }

    public function getClasse()
    {
        return $this->classe;
    }

    
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    
    public function getMana()
    {
        return $this->mana;
    }

     
    public function setMana($mana)
    {
        $this->mana = $mana;

        return $this;
    }

    
    public function getManaMaxima()
    {
        return $this->manaMaxima;
    }

     
    public function setManaMaxima($manaMaxima)
    {
        $this->manaMaxima = $manaMaxima;

        return $this;
    }
}