<?php
    include("../config/conexionPDO.php");
    $conexion=conexion();

    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        $id = $_GET["id"];
        echo "$id";
        echo "e";
        try{
            $sql = "delete from proyecto where id_proyecto = :id";
            $sentencia = $conexion -> prepare($sql);                $sentencia -> bindParam(':id', $id, PDO::PARAM_INT);
            $result = $sentencia->execute();
            echo "e";
            $num_filas = $sentencia->rowCount();
            echo "$num_filas filas han sido eliminadas<br>";
            header("Location: ../vista/listar_proyecto.php");            }catch(PDOException $e){
            echo $e->getMessage();
        }
        $conexion = null;
    }

?>

