<?php
    require_once("conexionPDO.php");

    $conexion = conexion();
    try{
        $sql = "insert into proyecto (titulo,logotipo) values (:titulo, :logotipo)";
        $sentencia = $conexion->prepare($sql);
        $titulo="Horus Rising";
        $logotipo=file_get_contents("elves.jpg");

        $sentencia->bindParam(':titulo',$titulo,PDO::PARAM_STR);
        $sentencia->bindParam(':logotipo',$logotipo,PDO::PARAM_LOB);

        $sentencia->execute();

        echo "Datos insertados";

    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conexion = null;



?>