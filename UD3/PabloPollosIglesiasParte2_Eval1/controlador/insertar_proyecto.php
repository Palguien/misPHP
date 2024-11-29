<?php
    include("../config/conexionPDO.php");
     //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        try{
            //Leemos los datos de formulario, por ejemplo: nombre y edad
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];
            $fecha = $_POST["fecha"];
            $prioridad = $_POST["prioridad"];
            $realizada = $_POST["realizada"];
            $logotipo = file_get_contents($_FILES["logotipo"]['tmp_name']);

            //Prepara lo consulta de insert
            $sql = "insert into tareas (titulo, descripcion,fecha, prioridad, realizada, img_tarea)
            values (:titulo, :descripcion, :fecha_presentacion, :nota, :pdf, :logotipo)";
            $sentencia = $conexion->prepare($sql);

            //Vinculo la variable al parámetro
            //indicando tipo de valor, s para string, i para int
            $sentencia->bindValue(':titulo',$titulo,PDO::PARAM_STR);
            $sentencia->bindValue(':descripcion',$descripcion,PDO::PARAM_STR);
            $sentencia->bindValue(':fecha_presentacion',$fecha,PDO::PARAM_STR);
            $sentencia->bindValue(':nota',$prioridad,PDO::PARAM_INT);
            $sentencia->bindValue(':pdf',$realizada,PDO::PARAM_INT);
            $sentencia->bindValue(':logotipo',$logotipo);
            $sentencia->execute();
                //Todo correcto
                //Aquí podemos redireccionar a un listado de los datos:
                header("Location: ../vista/listar_proyecto.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        //Desconectamos
        $conexion = null;
    }