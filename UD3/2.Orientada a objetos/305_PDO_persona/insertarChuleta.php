<?php
    //bindParam
    $sql = "insert into persona (nombre, apellido) values (:nombre, :apellido)";
    $sentencia = $conexion->prepare($sql);

    //Vincular parámetros con bindParam
    //tipo de datos PDO::PARAM_STR, PDO::PARAM_INT si entero
    $sentencia->bindParam(':nombre',$nombre,PDO::PARAM_STR);
    $sentencia->bindParam(':apellido',$apellido,PDO::PARAM_STR);

    $sentencia->execute();

    echo "Datos insertados!!";

    //------------------

    //bindValue
    $sql = "insert into persona (nombre, apellido) values (:nombre, :apellido)";
    $sentencia = $conexion->prepare($sql);

    //Vincular parámetros con bindValue
    //tipo de datos PDO::PARAM_STR, PDO::PARAM_INT si entero
    $sentencia->bindValue(':nombre',$nombre,PDO::PARAM_STR);
    $sentencia->bindValue(':apellido',$apellido,PDO::PARAM_STR);

    $sentencia->execute();

    echo "Datos insertados!!";
?>