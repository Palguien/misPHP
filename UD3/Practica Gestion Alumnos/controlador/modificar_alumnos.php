<?php
    
    include("../config/conexion.php");

     //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        $id = $_GET["id"];
        //$id = 3;
        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $apellido1 = $_POST["apellido1"];
        $apellido2 = $_POST["apellido2"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $curso = $_POST["curso"];
        echo "$id";

        $modify=$conexion->prepare("update alumnos set DNI=?,nombre=?,apellido1=?,apellido2=?,email=?,telefono=?,curso=? where id_alumnos = ?");
        $modify->bind_param("sssssisi",$dni,$nombre,$apellido1,$apellido2,$email,$telefono,$curso, $id);

        if($modify->execute()){
            //Todo correcto
            //Aquí podemos redireccionar a un listado de los datos:
            header("Location: ../vista/listar_alumnos.php");
        }else{
            //ERROR
        }

        //Desconectamos
        $conexion->close();
    }
?>