<?php
    function conexion(){
        //conexion.php
        $mysqli_conexion = new mysqli("localhost","root","","pruebas");
        if($mysqli_conexion->connect_errno){
            echo("Error de conexión a la base de datos: ".$mysqli_conexion->connect_errno);
            return null;
            exit();
        }
        return $mysqli_conexion;
    }
    /*
    $conexion = conexion();
    //Si llegamos aquí estamos en la base de datos
    echo("Estoy dentro");
    //cerrar conexión
    $conexion->close();*/