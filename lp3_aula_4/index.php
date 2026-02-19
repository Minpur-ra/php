<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aulita 4</title>
</head>
<body>


<h4>1)</h4>
<ul>
    <li>
        <?php 
        for($i = -10; $i < 11; $i++){
         echo "$i <br>";} ?>
        
        
    </li>
</ul>

<h4>2)</h4>
<ul>
    <li>

    <?php 
    $soma = 0;
    for($k = 1; $k < 501; $k++){
        if($k % 2 != 0 & $k % 3 ==0){
            $soma += $k; }
        } echo "a soma deu: $soma <br>"; ?>
    

    </li>
</ul>

<h4>3)</h4>
<ul>
    <li>

    <?php 
    for($x = 100; $x > 0; $x-=10){
        echo "$x <br>"; }
        echo "acabou"; ?>

    </li>
</ul>

<h4>4)</h4>
<ul>
    <li>

    <?php 
    for($z = 99; $z > 1; $z--){
        if($z % 5 == 0 & $z %2 != 0){
            echo "[$z] <br>";
        }else{
            echo "$z <br>"; }
        } ?>

    </li>
</ul>

<h4>5)</h4>
<ul>
    <li>

    <?php 
    for($y = 150; $y > 0; $y-=5){
            echo "$y <br>"; } ?>
    </li>
</ul>

<h4>6)</h4>
<ul>
    <li>

    <?php 
    $c = 150;
    while($c>=0){
        echo "$c <br>";
        $c-=5;
    } 
    ?>

    </li>
</ul>
    
</body>
</html>