

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>aulita 3</title>
</head>
<body>
    <h1>lp3 aula 3</h1>

    <?php 
    for($i = 0; $i < 10; $i+=2){
        echo "$i <br>";
    }
    $x = 1;
    while($x<10){
        echo "$x <br>";
        $x+=2;
    }
    ?>

        <h4> múltiplos de 3 entre 0 e 100</h4>
    <ul>
        
       <?php for($m = 3; $m < 100; $m+=3){?>
       <li>numero: <?php echo "$m <br>"; ?> </li> 
    <?php }?>
    </ul>

    <h4> múltiplos de 5 entre 0 e 100</h4>
    <ul>
        
       <?php for($c = 5; $c < 100; $c+=5){?>
       <li>numero: <?= $c; ?> </li> 
    <?php }?>
    </ul>

    <h4> contagem decrescente de 100 a 0 </h4>
    <ul>
        
       <?php for($d = 100; $d >= 0; $d-=5){?>
       <li> <?= $d; ?></li> 
    <?php }?>
    <li>acabou</li>
    </ul>

        <h4> média aritmética</h4>
    <ul>
        
       <?php 
       $tot = 0
       for($l = 13; $l < 73; $l++){?>
       <li>numero: <?php echo "$l <br>"; ?> </li> 
       <?php 
       $tot = $tot + $l;
       $cont++; ?>
    <?php }?>
    <?php 
    $med = 0
    $med = $tot/$cont;
    echo "A média é $med"; ?>
    </ul>


    <h4> contagem regressiva</h4>
    <?php for($z = 30; $z > 0; $z--){?>
    <?php if($z %4 == 0){
    echo "[$z]";
} else{?>
    <li> <?= $z; ?></li> 
<?php } }?>
    </ul>

</body>
</html>