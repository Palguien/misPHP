<?php
    include("../config/conexion.php");

     //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        //Leemos los datos de formulario, por ejemplo: nombre y edad
        $nombre = $_POST["nombre"];
        echo $nombre;

        //Prepara lo consulta de insert
        $consultaInsert = $conexion->prepare("insert into persona(nombre) value (?)");

        //Vinculo la variable al parámetro
        //indicando tipo de valor, s para string, i para int
        $consultaInsert->bind_param("s",$nombre);
        if($consultaInsert->execute()){
            //Todo correcto
            //Aquí podemos redireccionar a un listado de los datos:
            header("Location: ../vista/listar_personas.php");
        }else{
            //ERROR
        }

        //Desconectamos
        $conexion->close();
    }