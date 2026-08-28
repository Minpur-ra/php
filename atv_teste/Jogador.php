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

    }

    public function atacar(){

    }

    public function usarhabilidade(){

    }

    public function recuperarMana(){

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