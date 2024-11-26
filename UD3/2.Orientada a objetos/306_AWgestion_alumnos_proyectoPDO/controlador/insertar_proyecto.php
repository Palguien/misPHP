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
            $periodo = $_POST["periodo"];
            $curso = $_POST["curso"];
            $fecha_presentacion = $_POST["fecha_presentacion"];
            $nota = $_POST["nota"];
            $pdf = $_POST["pdf"];
            $logotipo = $_POST["logotipo"];

            //Prepara lo consulta de insert
            $sql = "insert into proyecto (titulo, descripcion, periodo, curso, fecha_presentacion, nota, pdf, logotipo)
            values (:titulo, :descripcion, :periodo, :curso, :fecha_presentacion, :nota, :pdf, :logotipo)";
            $sentencia = $conexion->prepare($sql);

            //Vinculo la variable al parámetro
            //indicando tipo de valor, s para string, i para int
            $sentencia->bindValue(':titulo',$titulo,PDO::PARAM_STR);
            $sentencia->bindValue(':descripcion',$descripcion,PDO::PARAM_STR);
            $sentencia->bindValue(':periodo',$periodo,PDO::PARAM_STR);
            $sentencia->bindValue(':curso',$curso,PDO::PARAM_STR);
            $sentencia->bindValue(':fecha_presentacion',$fecha_presentacion,PDO::PARAM_STR);
            $sentencia->bindValue(':nota',$nota,PDO::PARAM_INT);
            $sentencia->bindValue(':pdf',$pdf,PDO::PARAM_STR);
            $sentencia->bindValue(':logotipo',$logotipo,PDO::PARAM_LOB);
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