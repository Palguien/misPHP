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
            $pdf = file_get_contents($_FILES["pdf"]['tmp_name']);
            $logotipo = file_get_contents($_FILES["logotipo"]['tmp_name']);
            $alumno=$_POST["alumno"];
            $tutor=$_POST["tutor"];
            $modulo1=$_POST["modulo1"];
            $modulo2=$_POST["modulo2"];
            $modulo3=$_POST["modulo3"];


            //Prepara lo consulta de insert
            $sql = "update proyecto set titulo = :titulo, descripcion =:descripcion, periodo = :periodo, curso = :curso, fecha_presentacion = :fecha_presentacion, nota = :nota, logotipo = :logotipo, pdf = :pdf,
            alumno = $alumno, tutor = $tutor, modulo1 = $modulo1, modulo2 = $modulo2, modulo3 = $modulo3 where id_proyecto = $id";
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