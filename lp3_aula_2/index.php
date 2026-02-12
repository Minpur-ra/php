
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aulita 2 </title>
</head>
<body>
    <h1>lp3, aula 2, bbs</h1>
    <?php
    
    $bilu = 4; 
    echo "isso é: $bilu <br>"; 
    echo 'scr <br>'; 
    echo 4 . "<br>"; 
    echo $bilu;
     ?>
     <h3>listita</h3>
     <ul>
        <?php 
        if($bilu %2 == 0) {
            $resp = "par";
        } else {
            $resp = "impar";
        }
      ?>
        <li> a variável bilu é <?php echo $resp; ?></li>
         
        
        <?php if($bilu %2 == 0) { ?>
       <li> a variável bilu é par</li>
       <li> vou te dar 5 motivos pra sorrir</li>
       <?php } else { ?>
        <li> a variável bilu é impar</li>
        <?php } ?>
        
    </ul>
</body>
</html>