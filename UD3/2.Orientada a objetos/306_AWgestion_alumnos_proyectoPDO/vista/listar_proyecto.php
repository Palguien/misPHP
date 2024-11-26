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

    <form action = "../vista/formulario_agregar_proyecto.html" method = "POST">           
        <input type="submit" name="" value="Agregar" id="boton1">
    </form>
    <?php
    include("../config/conexionPDO.php");

    //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        $sql = "select * from proyecto";
        $sentencia = $conexion->query($sql);
        $sentencia->execute();
        $listaPersonas=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        $numRegistros = $sentencia->rowCount();
        echo "<h1>Número de registros: ".$numRegistros."</h1>";

        if($numRegistros>0){
            //Recorremos los resultados
            echo '<table border="solid">';
            echo "<tr><th>ID</th><th>TÍTULO</th><th>DESCRIPCIÓN</th><th>PERÍODO</th><th>CURSO</th><th>FECHA_PRESENTACIÓN</th><th>NOTA</th><th>LOGOTIPO</th><th>PDF</th></tr>";
            foreach ($listaPersonas as $persona) {
                $id = $persona["id_proyecto"];
                echo "<tr><td>".$persona["id_proyecto"]."</td><td>".$persona["titulo"]."</td><td>".$persona["descripcion"]."</td>";
                echo "<td>".$persona["periodo"]."</td><td>".$persona["curso"]."</td>";
                echo "<td>".$persona["fecha_presentacion"]."</td><td>".$persona["nota"]."</td><td>".$persona["pdf"]."</td>";
                $imagenRecogida = $persona["logotipo"];
                echo '<td><img src = "data:image/png;base64",'. base64_encode($imagenRecogida) .'" alt="imagen" width="50px" height ="50px"/></td>';
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