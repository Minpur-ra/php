
<?php 

$peso = $_POST['ps'];
$altura = $_POST['alt'];
$vl = $peso / ($altura * $altura);

if($vl<18.5){
    echo "você está abaixo do peso";
}else if($vl > 18.5 && $vl < 25){
    echo "você está no peso ideal";
}else if($vl > 25 && $vl < 30){
    echo "você está sobrepeso";
}else if($vl > 30 && $vl < 40){
    echo "você está obeso";
}else{
    echo "você está morbidamente obeso";
}



?>