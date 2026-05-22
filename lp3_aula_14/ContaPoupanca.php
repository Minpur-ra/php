<?php
require_once "ContaBancaria.php";

class ContaPoupanca extends ContaBancaria {
  public int $diaAniversario;
    public float $taxaRendimentoMensal;
    public int $diasSemMovimentacao;
    
    public function creditarRendimento(){
        $r = $this->taxaRendimentoMensal * 12
    }
    }

?>