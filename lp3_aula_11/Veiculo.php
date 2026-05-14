<?php 
 class Veiculo{

 public string $marca;
 public string $modelo;
 public int $ano;
 public float $combustivel;
 public float $consumo;
 

 public function abastecer($litros) {
    $combust = $this->combustivel + $litros;
    echo $combust . " litros pós abastecer <br>";
 }
 public function calcularAutonomia () {
   $auto = ($this->consumo * $this->combustivel);
    echo $auto . "kms percorríveis <br>";
 }
 public function exibirDados (){
   echo $this->marca . " marca do seu carro <br>";
   echo $this->modelo . " modelo do seu carro <br>";
   echo $this->ano . " ano do seu carro <br>";
   echo $this->combustivel . " quantidade de combustivel <br>" ;
   echo $this->consumo . " consumo médio do veículo <br>" ;
   echo "<br>";
 }

 }
?>