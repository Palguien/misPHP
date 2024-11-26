<?php
    function insertParam($nombre){
        try{
            $conexion=conexion();
            //bindParam
            $sql = "insert into persona (nombre) values (:nombre)";
            $sentencia = $conexion->prepare($sql);

            //Vincular parámetros con bindParam
            //tipo de datos PDO::PARAM_STR, PDO::PARAM_INT si entero
            $sentencia->bindParam(':nombre',$nombre,PDO::PARAM_STR);

            $sentencia->execute();

            echo "Datos insertados!!";
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $conexion = null;

    }
    //------------------
    function insertValue($nombre){
        try{
            $conexion=conexion();
            //bindValue
            $sql = "insert into persona (nombre) values (:nombre)";
            $sentencia = $conexion->prepare($sql);

            //Vincular parámetros con bindValue
            //tipo de datos PDO::PARAM_STR, PDO::PARAM_INT si entero
            $sentencia->bindValue(':nombre',$nombre,PDO::PARAM_STR);

            $sentencia->execute();

            echo "Datos insertados!!";
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $conexion = null;
    }
    

    
?>