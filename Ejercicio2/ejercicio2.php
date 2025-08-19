<?php

$Contra_pred = "Ari123";//Contraseña predefinida

$contra = $_GET["contraseña"];

if (strcasecmp($Contra_pred, $contra) == 0){
    echo "Contraseña Exitosa";
}else{
    echo"***ERROR*** <br>";
    echo"Contraseña incorrecta";
}

?>