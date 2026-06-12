<?php

require_once "Conta.php";
class ContaCorrente extends Conta
{
    public float $limiteChequeEspecial;
    public float $taxaManutencaoMensal;
    public string $cartaoCreditoVencimento;
    public float $valorCartaoCredito;

    public function sacar(float $valor)
    {
        if ($valor > 0 && ($this->saldo  + $this->limiteChequeEspecial) >= $valor) {
            $this->saldo = $this->saldo - $valor;
        } else {
            echo "Erro: valor igual a zero ou maior que o saldo + limite do cheque especial";
        }
    }
    public function cobrarTaxaMensal()
    {

        $this->saldo -= $this->taxaManutencaoMensal;
    }
    public function solicitarAumentoLimite(float $valor)
    {

        if ($valor > 0) {
            if ($valor <= 0.3 * $this->limiteChequeEspecial) {
                $this->limiteChequeEspecial += $valor;
            }
        }
    }
    public function pagarFaturaCartao()
    {
        $fiuza = (int)date('d');
        if ($fiuza >= $this->cartaoCreditoVencimento) {
            $this->saldo -= $this->valorCartaoCredito;
            $this->valorCartaoCredito = 0;
        }
    }
   
    public function imprimir(){

    }
}
