<?php
require_once "ContaBancaria.php";

class ContaCorrente extends ContaBancaria
{
    public float $limiteChequeEspecial;
    public float $taxaManutencaoMensal;
    public string $cartaoCreditoVencimento;
    public float $valorCartaoCredito;

    public function sacar(float $valor)
    {
        if ($valor >= $this->saldo + $this->limiteChequeEspecial || $valor <= $this->saldo + $this->limiteChequeEspecial) {
            $this->saldo -= $valor;
            return  $this->saldo;
        } else {
            echo "Valor inválido, tente novamente.";
        }
    }
    public function cobrarTaxaMensal()
    {
        if ($this->saldo > $this->taxaManutencaoMensal) {
            $this->saldo -= $this->taxaManutencaoMensal;
        } elseif ($this->saldo <= $this->taxaManutencaoMensal) {
            $this->saldo  -= $this->taxaManutencaoMensal;
        }
    }
    public function solicitarAumentoLimite(float $valor)
    {
        if ($valor > 0) { {
                if ($valor <= 0.3 * $this->limiteChequeEspecial) {
                    $this->limiteChequeEspecial += $valor;
                } else {
                    echo "Valor solicitado excede o limite permitido.";
                }
            }
        }
    }
    public function pagarFaturaCartao()
    {
        if ($this->cartaoCreditoVencimento == true && $this->saldo > $this->valorCartaoCredito) {
            $this->saldo -= $this->valorCartaoCredito;
        } else if ($this->saldo < $this->valorCartaoCredito) {
            $this->saldo -= $this->valorCartaoCredito;
        }
    }
}
