<?php 

require_once "Funcionario.php";


$f1 = new Funcionario();
$f1-> codigo = 233232;
$f1-> nome = "mimi";
$f1-> salario = 1200;
$f1-> cargaHoraria = 1200;

$f2 = new Funcionario();
$f2-> codigo = 424242;
$f2-> nome = "lolo";
$f2-> salario = 1500;
$f2-> cargaHoraria = 1500;

$f3 = new Funcionario();
$f3-> codigo = 636363;
$f3-> nome = "yohanna";
$f3-> salario = 890;
$f3-> cargaHoraria = 600;

echo "<pre>";
print_r($f1);
print_r($f2);
print_r($f3);

$f1->calcularSalarioHora();
$f1->aumentarSalario (10);
$f1->exibirDados();

$f2->calcularSalarioHora();
$f2->aumentarSalario (20);
$f2->exibirDados();

$f3->calcularSalarioHora();
$f3->aumentarSalario (30);
$f3->exibirDados();




?>