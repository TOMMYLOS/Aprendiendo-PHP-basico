<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERACIONES</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
</head>
<body>
    <form action="capitulo6.php" method="post" class="form-inline">
    <label for="numero1">Número</label>
    <input type="text" name="num1" class= "form-control" id="numero1">
    <label for="numero2">Final</label>
    <input type="text" name="num2" class= "form-control" id="numero2">
    <label for="operador">Operador</label>
        <select class="form-control" name="operador">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicacion</option>
            <option>Division</option>
            <option>Potenciacion</option>
         </select>
         <input type="submit" value="Enviar" class="btn btn-success" name= "btn1">
    </form>
    <h2><center>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <?php
        if(isset($_POST['btn1']))
        {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operador = $_POST['operador'];

                switch($operador)
                {
                    case 'Suma': suma($num1,$num2);break;
                    case 'Multiplicacion': multiplicar($num1,$num2);break;
                    case 'Division': dividir($num1,$num2);break;
                    case 'Resta': restar($num1,$num2);break;
                    case 'Potenciacion': potencia($num1,$num2);break;
                }
        }
        
        function suma($vari1,$final)
        {
            echo "<h1>SUMA</h1>";
            echo "<table class=\"table table-striped\">";
            for($i=0;$i<=$final;$i++)
            {
                $total = $vari1 + $i;
                echo "<tr><td><center>$vari1 + $i = ".number_format($total,2,",",".")."</td></tr></center>"; 
            }
            echo "</table>";
        }
            function multiplicar($vari1,$final)
            {
                echo "<h1>MULTIPLICACIÓN</h1>";
                echo "<table class=\"table table-striped\">";
                for($i=0;$i<=$final;$i++)
                {
                    $total = $vari1 * $i;
                    echo "<tr><td><center>$vari1 * $i = ".number_format($total,2,",",".")."</td></tr></center>"; 
                }
                echo "</table>";
            }
            function dividir($vari1,$final)
            {
                echo "<h1>DIVISIÓN</h1>";
                echo "<table class=\"table table-striped\">";
                for($i=0;$i<=$final;$i++)
                {
                    $total = $vari1 / $i;
                    echo "<tr><td><center>$vari1 / $i = ".number_format($total,2,",",".")."</td></tr></center>"; 
                }
                echo "</table>";
            }
            function restar($vari1,$final)
            {
                echo "<h1>RESTAR</h1>";
                echo "<table class=\"table table-striped\">";
                for($i=0;$i<=$final;$i++)
                {
                    $total = $vari1 - $i;
                    echo "<tr><td><center>$vari1 - $i = ".number_format($total,2,",",".")."</td></tr></center>"; 
                }
                echo "</table>";
            }
            function potencia($vari1,$final)
            {
                echo "<h1>POTENCIACIÓN</h1>";
                echo "<table class=\"table table-striped\">";
                for($i=0;$i<=$final;$i++)
                {
                    $total = $vari1 ** $i;
                    echo "<tr><td><center>$vari1 ^ $i = ".number_format($total,2,",",".")."</td></tr></center>"; 
                }
                echo "</table>";
            }
    ?>
    </div>
    <div class="col-md-4"></div>
  </div>
  </h2> </center>
</body>
</html>