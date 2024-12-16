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
            //Leemos los datos de formulario, por ejemplo: nombre y edad
            $periodo = $_POST["rebajada"];
            $curso = $_POST["rebaja"];


            //Prepara lo consulta de insert
            $sql = "update rebajas_pablo set rebajada = :periodo, rebaja= :curso where id_prenda = :id";
            $sentencia = $conexion->prepare($sql);

            //Vinculo la variable al parámetro
            //indicando tipo de valor, s para string, i para int


            $sentencia->bindValue(':periodo',$periodo,PDO::PARAM_INT);
            $sentencia->bindValue(':curso',$curso,PDO::PARAM_INT);

            $sentencia->bindValue(':id',$id,PDO::PARAM_INT);
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