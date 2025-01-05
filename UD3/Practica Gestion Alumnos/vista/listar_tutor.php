<?php
    // Nos unimos a la sesion
    session_start();
    // Y comprobamos que el usuario que se haya autenticado, y que sea administrador
    if(!isset($_SESSION["user"]) || $_SESSION["tipo"]==2){
        // Si no se ha autenticado, redirigimos al login
        header("Location: ../index.html");    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUTORES</title>
</head>
<body>
    <header><h1>Base de datos de proyecto</h1></header>

    <form action = "../vista/formulario_agregar_tutor.php" method = "POST">           
        <input type="submit" name="" value="Agregar" id="boton1">
    </form>
    <?php
    include("../config/conexionPDO.php");

    //CONSULTA BASE DE DATOS

    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        $sql = "select * from tutor where baja = 0";
        $sentencia = $conexion->query($sql);
        $sentencia->execute();
        $listaTutores=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        $numRegistros = $sentencia->rowCount();
        echo "<h1>Número de registros: ".$numRegistros."</h1>";

        if($numRegistros>0){
            //Recorremos los resultados
            echo '<table border="solid">';
            echo "<tr><th>ID</th><th>LOGIN</th><th>PASSWORD</th><th>CORREO</th><th>NOMBRE</th><th>APELLIDOS</th><th>TIPO_USU</th><th>BAJA</th><th>ACTIVAR</th></tr>";
            foreach ($listaTutores as $persona) {
                $id = $persona["id_tutor"];
                echo "<tr><td>".$persona["id_tutor"]."</td><td>".$persona["login"]."</td><td>".$persona["password"]."</td>";
                echo "<td>".$persona["correo"]."</td><td>".$persona["nombre"]."</td><td>".$persona["apellidos"]."</td>";
                echo "<td>".$persona["tipo_usu"]."</td><td>".$persona["baja"]."</td><td>".$persona["activar"]."</td>";
                if($persona["tipo_usu"]==1){
                    echo '<td>---</td>';
                    echo '<td>---</td>';
                    echo '<td>---</td>';
                }else{
                    echo '<td><a href="../controlador/eliminar_tutor.php?id='."$id".'"><button>Borrar</button></a></td>';
                    echo '<td><a href="../controlador/baja_tutor.php?id='."$id".'"><button>Baja</button></a></td>';
                    if($persona["activar"]==0){
                        echo '<td><a href="../controlador/activar_tutor.php?id='."$id".'&act=1"><button>Activar</button></a></td>';
                    }else{
                        echo '<td><a href="../controlador/activar_tutor.php?id='."$id".'&act=0"><button>Desactivar</button></a></td>';
                    }    
                }
                echo '<td><a href="../vista/formulario_modificar_tutor.php?id='."$id".'"><button>Modificar</button></a></td></tr>';
                

            }
            echo "</table>";
        }else{
            //error
            echo "<hr><h1>ERROR</h1><hr>";
        }

        //limpiar datos de memoria
        //$resultado->free();

        //cerrar conexión
        $conexion = null;

        
    }

?>
    <footer><h2>Pablo Pollos Iglesias</h2></footer>
</body>
</html>