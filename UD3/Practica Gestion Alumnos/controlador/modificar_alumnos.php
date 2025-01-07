<?php
    
    include("../config/conexion.php");

    function unique($tabla,$columna,$valor,$conexion,$id){
        $sql = "select * from $tabla where $columna='$valor' and id_$tabla!=$id";
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
        $id = $_GET["id"];
        //$id = 3;
        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $apellido1 = $_POST["apellido1"];
        $apellido2 = $_POST["apellido2"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $curso = $_POST["curso"];
        
        if(unique("alumnos","DNI",$dni,$conexion,$id)==false || unique("alumnos","email",$email,$conexion,$id)==false || unique("alumnos","telefono",$telefono,$conexion,$id)==false){
            echo "se repite";
            header("Location: ../vista/formulario_modificar_alumnos.php?id=$id");
        }else{

            $modify=$conexion->prepare("update alumnos set DNI=?,nombre=?,apellido1=?,apellido2=?,email=?,telefono=?,curso=? where id_alumnos = ?");
            $modify->bind_param("sssssisi",$dni,$nombre,$apellido1,$apellido2,$email,$telefono,$curso, $id);

            if($modify->execute()){
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
?>