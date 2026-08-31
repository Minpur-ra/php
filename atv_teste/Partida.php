

<?php 
require_once "Inimigo.php";
require_once "Jogador.php";

class Partida{
    private string $nome;
    private Jogador $jogador;
    private  $inimigos = array();
    private int $rodada;


    public function __construct(string $nome, Jogador $jogador, int $rodada){
        $this->nome = $nome;
        $this->jogador = $jogador;
        $this->inimigos = array();
        $this->rodada = $rodada;
    }

    public function adicionarInimigo(Inimigo $inimigo){
        $this->inimigos[] = $inimigo;

    }

    public function mostrarInimigos(){
        foreach($this->inimigos as $inimigo){
            $inimigo->mostrarDados() . "<br> <br>";
        }

    }

    public function iniciar(){
        echo"A Partida começou <br> <br> ";
        $this->mostrarInimigos();

    }

    public function atacarInimigo(int $indice){



        if($this->jogador->estaVivo() == false){
            echo "O jogador já foi derrotado e não pode realizar nenhuma açao. <br> <br>";
            return;
        }else if($indice < 0 || $indice >= count($this->inimigos)){
            echo "ce tá inventando inimigo, desista <br> <br>";
        }

        $inimigo = $this->inimigos[$indice];

        if($inimigo->estaVivo() == false){
            echo "nao tem como abater algo que já foi abatido <br> <br>";
        }

        $dano = $this->jogador->atacar();
        $inimigo->receberDano($dano);
        echo "O jogador " . $this->jogador->getNome() . " atacou o inimigo " . $inimigo->getNome() . " causando " . $dano . " de dano. <br> <br>";

        if($inimigo->estaVivo() == false){
            echo "O inimigo " . $inimigo->getNome() . " foi derrotado! <br> <br>";
            $this->jogador->ganharExperiencia(50);
            echo "O jogador " . $this->jogador->getNome() . " ganhou 50 de experiencia. <br> <br>";
    }
        }
    

    public function verificarFim(){
        if($this->jogador->estaVivo() == false){
            echo "O jogador " . $this->jogador->getNome() . " foi derrotado. fim <br> <br>";
            return true;
        }else if(count($this->inimigos) == 0){
            echo "Todos os inimigos foram derrotados. parabens. <br> <br>";
            return true;
        }else if($this->jogador->estaVivo() == true && count($this->inimigos) > 0){
            echo "partida em andamento, não seja ansioso. <br> <br>";
            return false;
        }
    }
    
    public function relatorio(){
        $this->jogador->mostrarDados();
        echo "Número de inimigos restantes: " . count($this->inimigos) . "<br> <br>";
        $this->mostrarInimigos();
        $this->verificarFim();
        $this->rodada;
        

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


    public function getRodada()
    {
        return $this->rodada;
    }

    
    public function setRodada($rodada)
    {
        $this->rodada = $rodada;

        return $this;
    }
}
