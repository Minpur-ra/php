


<?php 

require_once "Gato.php";


$g1 = new Gato();
$g1-> nome = "mimi";
$g1-> peso = 5;

$g2 = new Gato();
$g2-> nome = "lolo";
$g2-> peso = 5;

echo "<pre>";
print_r($g1);
print_r($g2);

$g1->miar();
$g2->comer();




?>