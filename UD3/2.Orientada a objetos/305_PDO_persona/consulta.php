<?php
    function consulta($id){
        $conexion=conexion();
        try{
            $sql = "select * from persona where id_persona = :id";
            $sentencia = $conexion -> prepare($sql);
            $sentencia -> bindParam(':id', $id, PDO::PARAM_INT);
            $sentencia->execute();
            $resultados=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            
            $num_filas = $sentencia->rowCount();
            echo "$num_filas coincidencias encontradas<br>";
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $conexion = null;
    }

?>