<?php 

class Personagem{
    private string $nome;
    private int $nivel;
    private int $vida;
    private int $vidaMaxima;

    public function __construct( string $nome, int $nivel, int $vida, int $vidaMaxima){
        $this->nome = $nome;
        $this->nivel = $nivel;
        $this->vida = $vida;
        $this->vidaMaxima = $vidaMaxima;
    }

    public function mostrarDados(){
        echo "Nome: " . $this->nome . "<br>";
        echo "Nivel: " . $this->nivel . "<br>";
        echo "Vida: " . $this->vida . "<br>";
        echo "Vida Maxima: " . $this->vidaMaxima . "<br>";
    }

    public function interagir(){
        echo "O personagem " . $this->nome . " acenou para voce";
    }

    public function receberDano(int $dmg){

    }

    public function estaVivo(){

    }

    public function ganharExperiencia(){
        
    }


    

    
    public function getNome()
    {
        return $this->nome;
    }

   
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    
    public function getNivel()
    {
        return $this->nivel;
    }

   
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

     
    public function getVida()
    {
        return $this->vida;
    }

     
    public function setVida($vida)
    {
        $this->vida = $vida;

        return $this;
    }

    
    public function getVidaMaxima()
    {
        return $this->vidaMaxima;
    }

   
    public function setVidaMaxima($vidaMaxima)
    {
        $this->vidaMaxima = $vidaMaxima;

        return $this;
    }
}




?>