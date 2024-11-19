<?php
    include("../config/conexion.php");

     //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        //Leemos los datos de formulario, por ejemplo: nombre y edad
        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $apellido1 = $_POST["apellido1"];
        $apellido2 = $_POST["apellido2"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $curso = $_POST["curso"];

        //Prepara lo consulta de insert
        $consultaInsert = $conexion->prepare("insert into alumnos(DNI,nombre,apellido1,apellido2,email,telefono,curso) value (?,?,?,?,?,?,?)");

        //Vinculo la variable al parámetro
        //indicando tipo de valor, s para string, i para int
        $consultaInsert->bind_param("sssssis",$dni,$nombre,$apellido1,$apellido2,$email,$telefono,$curso);
        if($consultaInsert->execute()){
            //Todo correcto
            //Aquí podemos redireccionar a un listado de los datos:
            header("Location: ../vista/listar_alumnos.php");
        }else{
            //ERROR
        }

        //Desconectamos
        $conexion->close();
    }