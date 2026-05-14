<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Início do seu código PHP aqui -->

            <?php

            
$nome = $_GET['campoNome'] ?? "";

$valores = [
    'Python', 
    'javascript',  
    'php',
    'java', 
];

$encontrado = false;

if ($nome == "") {
    echo '<div class="alert alert-info mt-3">Digite um nome de linguagem para fazer a pesquisa</div>';
} else {

    foreach ($valores as $item) {
        if ($nome == $item) {
            echo '<div class="alert alert-success mt-3">Você pesquisou por ' . $item . '. Achamos ela no banco de dados</div>';
            $encontrado = true;
            break;
        }
    }

    if (!$encontrado) {
        echo '<div class="alert alert-danger mt-3">Você pesquisou por ' . $nome . '. Não Achamos ela no banco de dados.</div>';
    }
}
?>
                       
            <!-- Final do seu código PHP aqui -->
        </div>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>