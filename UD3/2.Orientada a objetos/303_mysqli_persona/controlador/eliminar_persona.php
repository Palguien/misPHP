<?php
    
    include("../config/conexion.php");

     //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        $id = $_GET["id"];
        //$id = 16;
        echo "$id";

        $delete=$conexion->prepare("delete from persona where id_persona = ?");
        $delete->bind_param("i",$id);

        if($delete->execute()){
            //Todo correcto
            //Aquí podemos redireccionar a un listado de los datos:
            header("Location: ../vista/listar_personas.php");
        }else{
            //ERROR
        }

        //Desconectamos
        $conexion->close();
    }
?>