<?php

$num1 = $_GET["numero"];
$num2 = $_GET["numero2"];

if ($num2 == 0){
    echo "***ERROR*** <br>";
    echo "No es posible dividir dentro 0";
}else{

    $result = $num1 / $num2;
    echo "El resultado de la división es: " . $result;

}

?>