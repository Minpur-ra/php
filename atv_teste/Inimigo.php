<?php 
require_once 'Personagem.php';


class Inimigo extends Personagem{
    private string $tipo;
    private int $ataque;
    

    public function __construct(string $nome, int $nivel, int $vida, int $vidaMaxima, string $tipo, int $ataque, int $ataqueMaxima){
        parent::__construct($nome, $nivel, $vida, $vidaMaxima);
        $this->tipo = $tipo;
        $this->ataque = $ataque;
    
        
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