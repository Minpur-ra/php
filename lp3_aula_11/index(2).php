<?php 

require_once "Veiculo.php";


$f1 = new Veiculo();
$f1-> marca = "nissan";
$f1-> modelo = "kicks";
$f1-> ano = 1998;
$f1-> combustivel = 120;
$f1-> consumo = 12;

$f2 = new Veiculo();
$f2-> marca = "Honda";
$f2-> modelo = "civic";
$f2-> ano = 2000;
$f2-> combustivel = 160;
$f2-> consumo = 8;

$f3 = new Veiculo();
$f3-> marca = "uno";
$f3-> modelo = "com escada";
$f3-> ano = 2009;
$f3-> combustivel = 60;
$f3-> consumo = 12;

echo "<pre>";
print_r($f1);
print_r($f2);
print_r($f3);

$f1->abastecer(15);
$f1->calcularAutonomia ();
$f1->exibirDados();

$f2->abastecer(20);
$f2->calcularAutonomia ();
$f2->exibirDados();

$f3->abastecer(25);
$f3->calcularAutonomia ();
$f3->exibirDados();




?>