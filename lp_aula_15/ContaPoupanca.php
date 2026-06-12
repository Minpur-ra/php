<?php
require_once "ContaBancaria.php";

class ContaPoupanca extends ContaBancaria {
  public int $diaAniversario;
    public float $taxaRendimentoMensal;
    public int $diasSemMovimentacao;
    
    public function creditarRendimento(){
        if ($this->diaAniversario == true){
            $this->saldo += $this->saldo * $this->taxaRendimentoMensal ;
        }
        else {
            echo "Hoje não é dia de aniversário da conta, tente novamente mais tarde.";
    }
    }
    public function preverProximoRendimento(){
            $rendimento = $this->saldo * $this->taxaRendimentoMensal;
            return $rendimento;
}
}
?>