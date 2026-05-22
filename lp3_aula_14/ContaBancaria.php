

<?php

class ContaBancaria {
    public int $numero;
    public string $nomeTitular;
    public int $agencia;
    public float $saldo;
    public string $dataAbertura;
    public int $status;


    public function depositar(float $valor){
       $d = $this->saldo + $valor;
       return $d;
    }
     public function sacar(float $valor){
       $s = $this->saldo - $valor;
       return  $s;
    }
    public function transferir(float $valor, ContaBancaria $destino){
      if($this->saldo> 0 && $valor<=$this->saldo ){
        $this->saldo -= $valor;
        $destino->saldo += $valor;
      }else {
            echo "Ocorreu um problema!";
        }
    }
    public function fecharConta(){
        if(!empty($saldo)){
            echo "burrão, dá pra fechar não, tem que zerar antes";
        }else{
            echo "conta fechada, obrigado pelos seus serviços.";
        }
    }
    public function consultarSaldo(){
        return $this->saldo;
    }
}


?>