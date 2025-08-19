<?php

$edad = $_GET["edad"];
$sueldo = $_GET["Sueldo"];

if ($edad > 16 && $sueldo >= 1000){
    echo"Usted debe de pagar impuestos";
}else{
    echo"No se preocupe, no debe de pagar impuestos";
}
?>