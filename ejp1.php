<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOMMY TORRES</title>
</head>
<body>
   <?
    echo 'Aprendiendo variables <br>';
    $name = 'TOMMY TORRES';
    $num1 = 10;
    $num2 = 7;
    $total = $num1 + $num2;
    echo "La suma de $num1 mas $num2 es: $total <br>";
    echo '<b>'.$name.'</b><br>';
    echo 'If.....Else<br>';
    if ($num1==$num2){
           echo 'Los números son iguales <br>' ;
    }
    else{
        if ($num1>$num2){
            echo "El $num1 es mayor que $num2 <br>";
        }
        else{
            echo "El $num1 es menor que $num2 <br>";
        }
    }
    
    if ($num1>0){
        echo "El número $num1 es positivo <br>";
    }
    else{
        echo "El número $num1 es negativo <br>";
    }

    echo "<b>Secuencia de números  Ciclo - For</b><br>";
    $num3 = 5;
    for($i=0;$i<13;$i++){
        $total2 = $num3 * $i;
        echo "  $i * $num3 = <b>$total2</b><br>";
    }

    
    ?>
</body>
</html>