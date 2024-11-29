<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALUMNOS</title>
</head>
<body>
    <header><h1>Base de datos de tareas</h1></header>

    <form action = "../vista/formulario_agregar_proyecto.html" method = "POST">           
        <input type="submit" name="" value="Agregar" id="boton1">
    </form>
    <form action = "../vista/listar_proyecto.php" method = "POST">           
        <input type="submit" name="" value="Listar Todas" id="boton2">
    </form>
    <?php
    include("../config/conexionPDO.php");

    //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        $sql = "select * from tareas where realizada=1";
        $sentencia = $conexion->query($sql);
        $sentencia->execute();
        $listaPersonas=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        $numRegistros = $sentencia->rowCount();
        echo "<h1>Número de registros: ".$numRegistros."</h1>";

        if($numRegistros>0){
            //Recorremos los resultados
            echo '<table border="solid">';
            echo "<tr><th>TÍTULO</th><th>DESCRIPCIÓN</th><th>FECHA</th><th>PERÍODO</th><th>PRIORIDAD</th><th>IMAGEN TAREA</th>";
            foreach ($listaPersonas as $persona) {
                $id=$persona["titulo"];
                echo "<tr><td>".$persona["titulo"]."</td><td>".$persona["descripcion"]."</td><td>".$persona["fecha"]."</td>";
                echo "<td>".$persona["prioridad"]."</td><td>".$persona["realizada"]."</td>";
                echo "<td><img class='logos' src='data:image/png;base64," . base64_encode($persona["img_tarea"]) . "' alt='imagen' height='100px'/></td>";
                echo '<td><a href="../controlador/eliminar_proyecto.php?id='."$id".'"><button>Borrar</button></a></td>'; 
                echo '<td><a href="../vista/formulario_modificar_proyecto.php?id='."$id".'"><button>Modificar</button></a></td>';           
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