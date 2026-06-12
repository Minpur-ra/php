<?php
abstract
class Conta
{
    private int $numeroConta;
    public string $titular;
    public int $agencia;
    public float $saldo;
    public string $dateAbertura;
    public int $status;


    public function getNumero(){
        return $this->numeroConta;
    }

    public function setNumero(int $numero){
        $this->numeroConta  = $numero;
    }

    public function depositar(float $valor)
    {
        if ($valor > 0) {
            $this->saldo = $this->saldo + $valor;
        } else {
            echo "Erro: valor negativo ou nulo";
        }
    }
    public function sacar(float $valor)
    {
        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo = $this->saldo - $valor;
        } else {
            echo "Erro: valor igual a zero ou maior que o saldo";
        }
    }
    public function transferir(float $valor, Conta $destino)
    {

        if (!empty($destino) && $destino->status == true) {
            if ($valor > 0 && $this->saldo <= $valor) {
                $this->saldo = $this->saldo - $valor;
                $destino->saldo += $valor;
                return true;
            } else {
                echo "Erro: valor igual a zero ou maior que o saldo";
            }
        } else {
            echo "Conta Inexistente ou Inativa";
        }
        return false;
    }

    public function fecharConta()
    {
        if ($this->saldo == 0) {
            $this->status = false;
        } else {
            echo "erro: a conta possui saldo";
        }
    }
    public function consultarSaldo()
    {
        return $this->saldo;
    }

    public abstract function imprimir();
}
