<?php
    
    include("../config/conexion.php");

     //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        $id = $_GET["id"];
        //$id = 3;
        $nombre = $_POST["nombre"];
        //$nombre = "Ricardo";
        echo "$id";

        $modify=$conexion->prepare("update persona set nombre=? where id_persona = ?");
        $modify->bind_param("si",$nombre, $id);

        if($modify->execute()){
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