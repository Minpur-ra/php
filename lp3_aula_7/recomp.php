




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recompensa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<?php 

$horas = $_POST['rcp'];
$pt = 0;

if($horas <= 10){
    $pt = $horas * 2;
}else if($horas >10 && $horas <= 20){
    $pt = $horas * 5;}
else if($horas >20 && $horas <= 40){
    $pt = $horas * 10;}

    $ptf = $pt * 0.05;


?>
<div class="mt-4">
        <div class="alert alert-primary text-center">
          <h4 class="alert-heading">Resultado</h4>
          <p>
            Você acumulou 
            <span class="badge bg-success fs-5"><?php echo $pt; ?> pontos</span>
            <br>
            Equivalente a 
            <span class="badge bg-warning text-dark fs-5">R$ <?php echo number_format($ptf, 2, ',', '.'); ?></span>
          </p>
        </div>
      </div>
    
</body>
</html>