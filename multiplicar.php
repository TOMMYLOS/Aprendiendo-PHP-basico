<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MULTIPLICACION TORRES</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <form action="multiplicar.php" method="post"class="form-inline" >
        <label for="numero1">Número 1 
        <input type="text" name="num1" class="form-control" id="numero1">

        <label for="numero2">Número 2 
        <input type="text" name="num2" class="form-control" id="numero2">

        <label for="operador">Operador
        <select class="form-control" name="operador">
            <option>suma</option>
            <option>resta</option>
            <option>multiplicacion</option>
            <option>division</option>
            <option>potenciacion</option>
    </select>


        <input type="submit" value="Enviar" class="btn btn-success" name= "btn1">
    </form>

    <?php
    if (isset($_POST['btn1']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operador = $_POST['operador'];

        switch($operador)
        {
            case 'suma': $total = $num1 + $num2; echo "$num1 + $num2 = $total";break;
            case 'resta': $total = $num1 - $num2; echo "$num1 - $num2 = $total";break;
            case 'multiplicacion': $total = $num1 * $num2; echo "$num1 * $num2 = $total";break;
            case 'division': $total = $num1 / $num2; echo "$num1 / $num2 = $total";break;
            case 'potenciacion': $total = $num1 ** $num2; echo "$num1 ^ $num2 = $total";break;
            default: echo "Oye escriba solo + - * /";break;

        }
      
    }
    ?>
    
</body>
</html>