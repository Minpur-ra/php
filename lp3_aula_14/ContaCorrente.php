<?php
require_once "ContaBancaria.php";

class ContaCorrente extends ContaBancaria {
    public float $limiteChequeEspecial;
    public float $taxaManutencaoMensal;
    public string $cartaoCreditoVencimento;
    public float $valorCartaoCredito;

    public function sacar(float $valor){
       $s = $this->saldo - $valor;
       return  $s;
    }
    public function cobrarTaxaMensal(){
        $s = $this->saldo - $this->taxaManutencaoMensal;
        return $s;
    }
    public function solicitarAumentoLimite(float $valor){
        $n = $this->limiteChequeEspecial + $valor;
    return $n;
}
public function pagarFaturaCartao(){
    if($this->cartaoCreditoVencimento == true && $this->saldo > $this->valorCartaoCredito){
        $this->saldo -= $this->valorCartaoCredito;
    }else if($this->saldo < $this->valorCartaoCredito){
        $this->saldo - $this->valorCartaoCredito;
    }
}
    }

?>