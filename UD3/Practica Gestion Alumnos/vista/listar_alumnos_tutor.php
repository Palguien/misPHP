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
    <title>ALUMNOS</title>
</head>
<body>
    <header><h1>Base de datos de alumnos</h1></header>

    <form action = "../vista/formulario_agregar_alumnos.html" method = "POST">           
        <input type="submit" name="" value="Agregar" id="boton1">
    </form>
    <?php
    include("../config/conexion.php");

    //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        $consulta = "select * from alumnos";
        $resultado = $conexion->query($consulta);
        $numRegistros=$resultado->num_rows;

        $listaPersonas=$resultado->fetch_all(MYSQLI_ASSOC);
        echo "<h1>Número de registros: ".$numRegistros."</h1>";

        if($numRegistros>0){
            //Recorremos los resultados
            echo '<table border="solid">';
            echo "<tr><th>ID</th><th>DNI</th><th>NOMBRE</th><th>APELLIDO</th><th>APELLIDO 2</th><th>EMAIL</th><th>TELEFONO</th><th>CURSO</th></tr>";
            foreach ($listaPersonas as $persona) {
                $id = $persona["id_alumnos"];
                echo "<tr><td>".$persona["id_alumnos"]."</td><td>".$persona["DNI"]."</td><td>".$persona["nombre"]."</td>";
                echo "<td>".$persona["apellido1"]."</td><td>".$persona["apellido2"]."</td>";
                echo "<td>".$persona["email"]."</td><td>".$persona["telefono"]."</td><td>".$persona["curso"]."</td>";
                echo '<td><a href="../controlador/eliminar_alumnos.php?id='."$id".'"><button>Borrar</button></a></td>'; 
                echo '<td><a href="../vista/formulario_modificar_alumnos.php?id='."$id".'"><button>Modificar</button></a></td>';           
            }
            echo "</table>";
            

        }else{
            //error
        }

        //limpiar datos de memoria
        $resultado->free();

        //cerrar conexión
        $conexion->close();
    }

?>
    <footer><h2>Pablo Pollos Iglesias</h2></footer>
</body>
</html>