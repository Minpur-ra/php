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
        echo "Nome: " . $this->nome . "<br> <br>";
        echo "Nivel: " . $this->nivel . "<br> <br>";
        echo "Vida: " . $this->vida . "<br> <br>";
        echo "Vida Maxima: " . $this->vidaMaxima . "<br> <br>";
    }

    public function interagir(){
        echo "O personagem " . $this->nome . " acenou para voce <br> <br>";
    }

    public function receberDano(int $dmg){
        $this->vida -= $dmg;
        if($this->vida == 0){
            echo "Você foi derrotado <br> <br>";
        }

    }

    public function estaVivo(){
        if($this->vida > 0){
            echo "O personagem " . $this->nome . " está vivo <br> <br>";
            return true;
        }else{
            echo "O personagem " . $this->nome . " está morto <br> <br>";
            return false;
        }
            

    }

    public function ganharExperiencia(int $xp){
        $xp += $xp;
        if($xp >=100){
            $this->nivel ++;
            $this->vidaMaxima += 20;
            $this->vida = $this->vidaMaxima;
            echo "Parabens! Você subiu de nivel!<br> <br>";
            $xp = 0;
        }
        
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