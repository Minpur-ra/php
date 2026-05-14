<?php
require_once "Livro.php";

$f1 = new Livro();
$f1->titulo = "Como eu era antes d voce";
$f1->autor = "john moe";
$f1->pagina = 150;
$f1->exemplares = 10;

$f2 = new Livro();
$f2->titulo = "Adolescencia na visão jovem";
$f2->autor = "roberto carlos";
$f2->pagina = 67;
$f2->exemplares = 6;

$f3 = new Livro();
$f3->titulo = "As vezes que a vida te derruba";
$f3->autor = "marlon brado";
$f3->pagina = 220;
$f3->exemplares = 3;

echo "<pre>";
print_r($f1);
print_r($f2);
print_r($f3);

$f1->emprestarLivro();
$f1->devolverLivro();
$f1->verificarDisponibilidade();
$f1->alterarQuantidadePaginas(200);
$f1->exibirDados();
$f1->compararPaginas($f2);

$f2->emprestarLivro();
$f2->devolverLivro();
$f2->verificarDisponibilidade();
$f2->alterarQuantidadePaginas(100);
$f2->exibirDados();
$f2->compararPaginas($f3);

$f3->emprestarLivro();
$f3->devolverLivro();
$f3->verificarDisponibilidade();
$f3->alterarQuantidadePaginas(300);
$f3->exibirDados();
$f3->compararPaginas($f1);
?>