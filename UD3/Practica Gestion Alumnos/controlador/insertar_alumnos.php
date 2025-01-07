<?php
    include("../config/conexion.php");

    function unique($tabla,$columna,$valor,$conexion){
        $sql = "select * from $tabla where $columna='$valor'";
        $sentencia = $conexion->query($sql);
        $numRegistros = $sentencia->num_rows;
        if($numRegistros>0){
            return false;
        }else{
            return true;
        }
    }
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

        if(unique("alumnos","DNI",$dni,$conexion)==false || unique("alumnos","email",$email,$conexion)==false || unique("alumnos","telefono",$telefono,$conexion)==false){
            echo "se repite";
            header("Location: ../vista/formulario_agregar_alumnos.html?id=$id");
        }else{

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
        }
        //Desconectamos
        $conexion->close();
    }