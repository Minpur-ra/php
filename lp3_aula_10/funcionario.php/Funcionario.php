



<?php 
 class Funcionario{

 public int $codigo;
 public string $nome;
 public float $salario;
 public int $cargaHoraria;
 

 public function calcularSalarioHora () {
   
    $resultado = $this->salario / $this->cargaHoraria;
    echo $resultado . " r$ por hora <br>";
 }
 public function aumentarSalario ($percentual) {
    $this->salario = $this->salario + ($this->salario*$percentual / 100) ;
 }
 public function exibirDados (){
   echo $this->codigo . " seu código <br>";
   echo $this->nome . " seu nome <br>";
   echo $this->salario . " seu salario pós aumento <br>";
   echo $this->cargaHoraria . " sua carga horaria <br>" ;
 }

 }
?>