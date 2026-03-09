

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calc de peso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    
    <?php 

$peso = $_POST['ps'];
$altura = $_POST['alt'];
$vl = $peso / ($altura * $altura);

if($vl<18.5){
    $class = "você está abaixo do peso";
    $alert = "alert-warning";
}else if($vl > 18.5 && $vl < 25){
    $class = "você está no peso ideal";
    $alert = "alert-success";
}else if($vl > 25 && $vl < 30){
    $class = "você está sobrepeso";
    $alert = "alert-info";
}else if($vl > 30 && $vl < 40){
    $class = "você está obeso";
    $alert = "alert-danger";
}else{
    $class = "você está morbidamente obeso";
    $alert = "alert-dark";
}
?>
<div class="mt-4">
        <div class="alert <?php echo $alert; ?> text-center">
          <h4>Seu IMC é <?php echo number_format($vl, 2, ',', '.'); ?></h4>
          <p><strong><?php echo $class; ?></strong></p>
        </div>
      </div>
  <?php  ?>
</div>
    
</body>
</html>