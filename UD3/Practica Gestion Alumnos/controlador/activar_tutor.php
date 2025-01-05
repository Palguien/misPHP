<?php
    
    include("../config/conexionPDO.php");

     //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        try{
            $id = $_GET["id"];
            $act =  $_GET["act"];

            //Prepara lo consulta de insert
            $sql = "update tutor set activar = :activar where id_tutor = :id";
            $sentencia = $conexion->prepare($sql);

            //Vinculo la variable al parámetro
            $sentencia->bindValue(':activar',$act,PDO::PARAM_INT);
            $sentencia->bindValue(':id',$id,PDO::PARAM_INT);

            $sentencia->execute();
            //Todo correcto
            //Aquí podemos redireccionar a un listado de los datos:
            header("Location: ../vista/listar_tutor.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        //Desconectamos
        $conexion->close();
    }
?>