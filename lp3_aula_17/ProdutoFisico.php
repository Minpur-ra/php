<?php 

require_once 'Produto.php';
class ProdutoFisico extends Produto
{
    private float $peso;
    private string $dimensoesCxLxA;
    private float $custoFreteFixo;
    private float $transportadoraPrivada;

    public function getPeso(): float
    {
        return $this->peso;
    }

    public function setPeso(float $peso): void
    {
        $this->peso = $peso;
    }

    public function getDimensoesCxLxA(string $dimensoesCxLxA): string
    {
        return $this->dimensoesCxLxA;

    }
    public function setDimensoesCxLxA(string $dimensoesCxLxA){
        $this->dimensoesCxLxA = $dimensoesCxLxA;
        
    }

    public function getAltura(float $altura): float
    {
        
    }
+
    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
    }

    public function getLargura(): float
    {
        return $this->largura;
    }

    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
    }

    public function getProfundidade(): float
    {
        return $this->profundidade;
    }

    public function setProfundidade(float $profundidade): void
    {
        $this->profundidade = $profundidade;
    }
     public  function calcularPrecoVenda(){
        
     }

    public function verificarDisponibilidade (){

}
}


?>