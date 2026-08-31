<?php 
require_once 'Personagem.php';


class Inimigo extends Personagem{
    private string $tipo;
    private int $ataque;
    

    public function __construct(string $nome, int $nivel, int $vida, int $vidaMaxima, string $tipo, int $ataque){
        parent::__construct($nome, $nivel, $vida, $vidaMaxima);
        $this->tipo = $tipo;
        $this->ataque = $ataque;
    
        
    }
    public function interagir(){
        echo "O " . $this->tipo . " apareceu. <br> <br>";

    }

    public function mostrarDados(){
        parent:: mostrarDados();
        echo "Tipo: ". $this->tipo . "<br> <br>";
        echo "Ataque: ". $this->ataque . "<br> <br>";

    }

    public function atacar(){
        return $this->ataque;

    }

    public function mostrarDador(){

    }

    

    public function getTipo()
    {
        return $this->tipo;
    }

    
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    
    public function getAtaque()
    {
        return $this->ataque;
    }

     
    public function setAtaque($ataque)
    {
        $this->ataque = $ataque;

        return $this;
    }

}