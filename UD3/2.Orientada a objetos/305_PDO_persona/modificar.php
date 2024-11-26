<?php
    function modificar($nombreOld, $nombreNew){
        $conexion=conexion();
        try{
            $sql = "update persona set nombre = :nombreNew where nombre =:nombreOld";
            $sentencia = $conexion -> prepare($sql);
            $sentencia -> bindParam(':nombreOld', $nombreOld, PDO::PARAM_STR);
            $sentencia -> bindParam(':nombreNew', $nombreNew, PDO::PARAM_STR);
            $result = $sentencia->execute();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $conexion = null;
    }

?>