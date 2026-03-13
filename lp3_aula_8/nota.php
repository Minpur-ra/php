<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aprovado ou não</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<?php 


$n1 = $_POST['nt'];
$n2 = $_POST['ntt'];
$n3 = $_POST['nttt'];
$freq = $_POST['fq'];
$med = ($n1 + $n2 + $n3) / 3;

if($freq < 75){
    $class = "reprovado";
    $alert = "alert-danger";
}
else if($freq >= 75 && $med >= 7 ){
    $class = "aprovado";
    $alert = "alert-success";
}
else if ($freq >= 75 && $med< 7 && $med > 4){
    $class = "recuperação";
    $alert = "alert-warning";
}
else if($freq >= 75 && $med < 4){
    $class = "reprovado por nota";
    $alert = "alert-danger";
}




?>

<div class="mt-4">
        <div class="alert <?php echo $alert; ?> text-center">
          <h4>Sua média é <?php echo number_format($med, 2, ',', '.'); ?></h4>
          <p><strong><?php echo $class; ?></strong></p>
        </div>
      </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>