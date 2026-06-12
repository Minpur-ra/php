<?php
require_once "Conta.php";

class ContaPoupanca extends Conta
{
    public int $diaAniversario;
    public float $taxaRendimentoMensal;
    public int $diasSemMovimentacao;

    public function creditarRendimento()
    {

        if ($this->diaAniversario == 12) {
            $this->saldo = $this->saldo + ($this->saldo * $this->taxaRendimentoMensal);
        }
    }
    public function preverProximoRendimento() {
        return $this->saldo * $this->taxaRendimentoMensal;
    }
    public function imprimir(){

    }
}
