<?php
    
    include("../config/conexionPDO.php");

     //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        try{
            $id = $_GET["id"];
            //$id = 3;
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];
            $periodo = $_POST["periodo"];
            $curso = $_POST["curso"];
            $fecha_presentacion = $_POST["fecha_presentacion"];
            $nota = $_POST["nota"];
            $logotipo = file_get_contents($_FILES["logotipo"]['tmp_name']);
            $pdf = file_get_contents($_FILES["pdf"]['tmp_name']);


            //Prepara lo consulta de insert
            $sql = "update proyecto set titulo = :titulo, descripcion =:descripcion, periodo = :periodo, curso = :curso, fecha_presentacion = :fecha_presentacion, nota = :nota, logotipo = :logotipo, pdf = :pdf";
            $sentencia = $conexion->prepare($sql);

            //Vinculo la variable al parámetro
            //indicando tipo de valor, s para string, i para int
            $sentencia->bindValue(':titulo',$titulo,PDO::PARAM_STR);
            $sentencia->bindValue(':descripcion',$descripcion,PDO::PARAM_STR);
            $sentencia->bindValue(':periodo',$periodo,PDO::PARAM_STR);
            $sentencia->bindValue(':curso',$curso,PDO::PARAM_STR);
            $sentencia->bindValue(':fecha_presentacion',$fecha_presentacion,PDO::PARAM_STR);
            $sentencia->bindValue(':nota',$nota,PDO::PARAM_INT);
            $sentencia->bindValue(':pdf',$pdf);
            $sentencia->bindValue(':logotipo',$logotipo);
            $sentencia->execute();
            //Todo correcto
            //Aquí podemos redireccionar a un listado de los datos:
            header("Location: ../vista/listar_proyecto.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        //Desconectamos
        $conexion->close();
    }
?>