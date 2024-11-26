<?php
    function eliminar($nombre){
        $conexion=conexion();
        try{
            $sql = "delete from persona where nombre = :nombre";
            $sentencia = $conexion -> prepare($sql);
            $sentencia -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $result = $sentencia->execute();

            $num_filas = $sentencia->rowCount();
            echo "$num_filas filas han sido eliminados<br>";
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $conexion = null;
    }

?>