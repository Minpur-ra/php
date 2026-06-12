<?php

class ContaBancaria
{
    public int $numero;
    public string $nomeTitular;
    public string $agencia;
    public float $saldo;
    public int $dataAbertura;
    public string $status;


    public function depositar(float $valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
            return $this->saldo;
        } else {
            echo "Valor inválido, tente novamente.";
        }
    }
    public function sacar(float $valor)
    {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return  $this->saldo;
        } else {
            echo "Valor inválido, tente novamente.";
        }
    }
    public function transferir(float $valor, ContaBancaria $destino)
    {
        if ($this->saldo > 0 && $valor <= $this->saldo) {
            if ($destino->status == "ativo" && $destino->saldo > 0) {
                $this->saldo -= $valor;
                $destino->saldo += $valor;
                return true;
            } else {
                echo "O destino da transferência está inativo ou sem saldo.";
            }
        } else {
            echo "Ocorreu um problema, saldo negativo ou insuficiente!";
        }
    }
    public function consultarSaldo()
    {
        return $this->saldo;
    }
    public function fecharConta()
    {
        if ($this->saldo!=0) {
            echo "burrão, dá pra fechar não, tem que zerar antes";
        }
        elseif ($this->saldo > 0) {
            echo "realize o saque do valor remanescente!";
        }
         elseif ($this->saldo < 0) {
            echo "quite suas dívidas!";
        }
            else {
                $this->status = "inativo";
                echo "Conta fechada com sucesso!";
            }
    }
    
}
