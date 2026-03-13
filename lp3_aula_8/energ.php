<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>energia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <?php 

$kws = $_POST['kwt'];
$tipo = $_POST['tp'];
$valor = 0;

if($tipo == 1 ){
    if($kws <= 500){
    $valor = $kws * 0.40;
    }
else if($kws > 500){
        $valor = $kws * 0.65;
    }
}else if($tipo == 2 )
    {
if($kws <= 1000){
    $valor = $kws * 0.55;
    }
else if($kws > 1000){
        $valor = $kws * 0.60;
    }
}else if($tipo == 3 ){
    if($kws <= 5000){
    $valor = $kws * 0.55;
}
    else if($kws > 5000){
        $valor = $kws * 0.60;

    }
}

?>
    <div class="mt-4">
        <div class="alert alert-primary text-center">
            <h4>Valor total a pagar:</h4>
            <p><span class="badge bg-success fs-5">R$ <?php echo number_format($valor, 2, ',', '.'); ?></span></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>