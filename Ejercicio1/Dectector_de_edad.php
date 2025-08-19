
<?php

$edad = $_GET["edad"];

if ($edad >=18){
    echo "Edad Ingresada: " . $edad;
    echo"<br>";
    echo"Usted es mayor de edad";
}
else{
    echo"Edad Ingresada: " . $edad;
    echo "<br>";
    echo"Usted es menor de edad";
}

?>