<?php
    include("../config/conexionPDO.php");
     //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        try{
            //Leemos los datos de formulario, por ejemplo: nombre y edad
            $titulo = $_POST["prenda"];
            $descripcion = $_POST["precio"];
            $periodo = $_POST["rebajada"];
            $curso = $_POST["rebaja"];
            $logotipo = file_get_contents($_FILES["foto"]['tmp_name']);


            //Prepara lo consulta de insert
            $sql = "insert into rebajas_pablo (prenda, precio, rebajada, rebaja, foto)
            values (:titulo, :descripcion, :periodo, :curso, :logotipo)";
            $sentencia = $conexion->prepare($sql);

            //Vinculo la variable al parámetro
            //indicando tipo de valor, s para string, i para int
            $sentencia->bindValue(':titulo',$titulo,PDO::PARAM_STR);
            $sentencia->bindValue(':descripcion',$descripcion,PDO::PARAM_INT);
            $sentencia->bindValue(':periodo',$periodo,PDO::PARAM_INT);
            $sentencia->bindValue(':curso',$curso,PDO::PARAM_INT);
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