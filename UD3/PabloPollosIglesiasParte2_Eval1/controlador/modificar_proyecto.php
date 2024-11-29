<?php
    
    include("../config/conexionPDO.php");

     //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        try{
            $titulo = $_GET["id"];
            $descripcion = $_POST["descripcion"];
            $fecha = $_POST["fecha"];
            $prioridad = $_POST["prioridad"];
            $logotipo = $_POST["logotipo"];
            $realizada = $_POST["realizada"];


            //Prepara lo consulta de insert
            $sql = "update tareas set descripcion =:descripcion,  fecha = :fecha_presentacion, prioridad = :nota, img_tarea= :logotipo, realizada = :pdf where titulo = :titulo";
            $sentencia = $conexion->prepare($sql);

            //Vinculo la variable al parámetro
            //indicando tipo de valor, s para string, i para int
            $sentencia->bindValue(':titulo',$titulo,PDO::PARAM_STR);
            $sentencia->bindValue(':descripcion',$descripcion,PDO::PARAM_STR);
            $sentencia->bindValue(':fecha_presentacion',$fecha,PDO::PARAM_STR);
            $sentencia->bindValue(':nota',$prioridad,PDO::PARAM_INT);
            $sentencia->bindValue(':pdf',$realizada,PDO::PARAM_STR);
            $sentencia->bindValue(':logotipo',$logotipo,PDO::PARAM_LOB);
            $sentencia->execute();
            //Todo correcto
            //Aquí podemos redireccionar a un listado de los datos:
            header("Location: ../vista/listar_proyecto.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        //Desconectamos
        $conexion=null;
    }
?>