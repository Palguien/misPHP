<?php
    //main
    include_once "conexionPDO.php";
    include_once "lectura.php";
    include_once "insertar.php";
    include_once "eliminar.php";
    include_once "modificar.php";
    include_once "consulta.php";
    //insertParam("Ricardo");
    //eliminar("Ricardo");
    //modificar("Rogoberto","Rigoberto");
    consulta(4);
    echo "<br>";
    lectMatriz();
?>