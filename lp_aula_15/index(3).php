<?php

require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";


$cc1 = new ContaCorrente();
$cc1->numero = 123;
$cc1->nomeTitular = "João";
$cc1->agencia = "bb";
$cc1->saldo = 500;
$cc1->dataAbertura = 25032009;
$cc1->status = "ativo";
$cc1->limiteChequeEspecial = 2000;
$cc1->taxaManutencaoMensal = 50;
$cc1->cartaoCreditoVencimento = true;
$cc1->valorCartaoCredito = 1500;


$cp1 = new ContaPoupanca();
$cp1->numero = 125;
$cp1->nomeTitular = "Pedro";
$cp1->saldo = 1000;
$cp1->agencia = "bb";
$cp1->dataAbertura = 02052001;
$cp1->status = "inativo";
$cp1->diaAniversario = true;
$cp1->taxaRendimentoMensal = 0.05;
$cp1->diasSemMovimentacao = 30;




echo "<pre>";

print_r($cc1);
print_r($cp1);

$cp1->creditarRendimento();
echo "Saldo após crédito de rendimento: " . $cp1->consultarSaldo() . "\n";
$cp1->preverProximoRendimento();
echo "Próximo rendimento previsto: " . $cp1->preverProximoRendimento() . "\n";  

$cc1->pagarFaturaCartao();
echo "Saldo após pagamento da fatura do cartão: " . $cc1->consultarSaldo() . "\n";  
$cc1->solicitarAumentoLimite(500);
echo "Limite do cheque especial após solicitação de aumento: " . $cc1->limiteChequeEspecial . "\n";     
$cc1->cobrarTaxaMensal();
echo "Saldo após cobrança da taxa mensal: " . $cc1->consultarSaldo() . "\n";    
$cc1->sacar(300);
echo "Saldo após saque: " . $cc1->consultarSaldo() . "\n>"; 
$cc1->transferir(200, $cp1);
echo "Saldo após transferência: " . $cc1->consultarSaldo() . "\n>";
echo "Saldo da conta poupança após receber transferência: " . $cp1->consultarSaldo() . "\n>";
$cc1->fecharConta();
echo "Status da conta corrente após tentativa de fechamento: " . $cc1->status . "\n>";
$cc1->depositar(300);
echo "Saldo após depósito: " . $cc1->consultarSaldo() . "\n>";
$cc1->consultarSaldo();
$cp1->consultarSaldo();