<?php

$num = $_GET["numero"];

$verif = $num % 2;

if ($verif == 0){
    echo "Usted ingresó un número par";
}else{
    echo "Usted ingresó un número impar";
}

?>