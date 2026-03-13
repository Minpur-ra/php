<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desconto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <?php 
$valor = $_POST['cp'];
$cli = $_POST['ct'];

if($cli == 1){
    if($valor > 500){
        $desconto = $valor  * 0.05;
        $tot = $valor - $desconto; 
    }else{
    }
    }
    else if ($cli == 2){
        if($valor <= 1){
            $desconto = $valor * 0.10;
            $tot = $valor - $desconto;

            if($valor > 1000){
                $desconto = $valor * 0.10;
                $tot = $valor - $desconto;
               $frete = true;
            }
        }
    }else if ($cli == 3){
        if($valor <= 1){
            $desconto = $valor * 0.15;
            $tot = $valor - $desconto;
                $frete = true;
        }
    }

echo "<hr><div class='mt-4'>";
                        echo "<p><strong>Valor Original:</strong> R$ " . number_format($valor, 2, ',', '.') . "</p>";
                        echo "<p class='text-danger'><strong>Desconto Aplicado:</strong> R$ " . number_format($desconto, 2, ',', '.') . " (" . ($desconto * 100) . "%)</p>";
                        echo "<h4 class='text-success'><strong>Total a Pagar:</strong> R$ " . number_format($tot, 2, ',', '.') . "</h4>";

                        if ($frete) {
                            echo "<span class='badge bg-success fs-6 mt-2'>Frete Grátis Disponível!</span>";
                        }
                        echo "</div>";
                   
                     


    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>