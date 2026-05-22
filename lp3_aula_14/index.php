<?php

require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";


$cc1 = new ContaCorrente();
$cc1->numero = 123;
$cc1->nomeTitular = "João";
$cc1->agencia = "bb"
$cc1->saldo = 500;
$cc1->dataAbertura = 25032009;
$cc1->status = ativo;



$cp1 = new ContaPoupanca();
$cp1->numero = 123;
$cp1->nomeTitular = "Pedro";
$cp1->saldo = 500;

echo "<pre>";

print_r($cc1);
print_r($cp1);

