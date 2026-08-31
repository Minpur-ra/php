<?php 

require_once 'Personagem.php';
require_once 'Jogador.php';
require_once 'Inimigo.php';
require_once 'Partida.php';

$p1 = new Jogador("luna", 1, 100, 100, "arqueira", 100, 100);
$p1->mostrarDados();
$p1->interagir();
$p1->atacar();
$p1->usarHabilidade();
$p1->mostrarDados();


$inimigo1 = new Inimigo("Lu", 1, 100, 100, "goblin", 50);
$inimigo2 = new Inimigo("my", 1, 100, 100, "dragao", 60);
$inimigo3 = new Inimigo("carl", 1, 100, 100, "orc", 25);

$inimigo1->interagir();
$inimigo2->interagir();
$inimigo3->interagir();

$inimigo1->mostrarDados();
$inimigo2->mostrarDados();
$inimigo3->mostrarDados();

$pt1 = new Partida("bda",$p1, 1);

$pt1->adicionarInimigo($inimigo1);
$pt1->adicionarInimigo($inimigo2);
$pt1->adicionarInimigo($inimigo3);

$pt1->iniciar();
$pt1->mostrarInimigos();
$pt1->atacarInimigo(0);
$pt1->atacarInimigo(1);
$pt1->atacarInimigo(2);

$inimigo1->mostrarDados();
$inimigo2->mostrarDados();
$inimigo3->mostrarDados();
