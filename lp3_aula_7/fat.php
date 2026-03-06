

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cont</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    
    <?php

$tipo = $_POST['tp'];
$dia = $_POST['di'];
$km = $_POST['qms'];
$vlt = 0;

if($tipo == "1"){
    $vl = $dia * 90;
if($km <= 100){
    $vl2 = $km * 0.20;
    $vlt = $vl + $vl2;
    echo " você vai gastar: $vlt "; 
    }else if($km > 100){
        $vl2 = $km * 0.10;
        $vlt = $vl + $vl2;
    echo " você vai gastar: $vlt ";
    }}
    
    if($tipo == "2"){
    $vl = $dia *150;
if($km <= 200){
    $vl2 = $km * 0.30;
    $vlt = $vl + $vl2;
    echo " você vai gastar: $vlt "; 
    }else if($km > 200){
        $vl2 = $km * 0.25;
        $vlt = $vl + $vl2;
    echo " você vai gastar: $vlt ";
    }}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>