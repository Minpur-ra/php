<!-- quando uma classe nao puder ser estanciada
se nao gera objetos, é abstrata 
se tem umétodo abstrato na classe abstrata, os filhos têm que implemntar também-->

<?php 

require_once "Conta.php";
require_once "ContaCorrente.php";

$c = new ContaCorrente();

$c->setNumero(5);

echo $c->getNumero();

?>