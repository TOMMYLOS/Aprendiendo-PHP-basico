<?php
$ingre = $_POST['num4'];
for ($i=0; $i <13 ; $i++) { 
    $multiplo = $ingre * $i;
    echo "$ingre * $i = $multiplo <br>";
}
?>