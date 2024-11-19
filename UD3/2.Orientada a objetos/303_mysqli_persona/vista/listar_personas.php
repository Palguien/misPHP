<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "../vista/formulario_agregar_persona.html" method = "POST">           
        <input type="submit" name="" value="Agregar" id="boton1">
    </form>
    <?php
    include("../config/conexion.php");

    //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        $consulta = "select * from persona";
        $resultado = $conexion->query($consulta);
        $numRegistros=$resultado->num_rows;

        $listaPersonas=$resultado->fetch_all(MYSQLI_ASSOC);
        echo "<h1>Número de registros: ".$numRegistros."</h1>";

        if($numRegistros>0){
            //Recorremos los resultados
            echo "<table>";
            echo "<tr><th>ID</th><th>NOMBRE</th></tr>";
            foreach ($listaPersonas as $persona) {
                $id = $persona["id_persona"];
                echo "<tr><td>".$persona["id_persona"]."</td><td>".$persona["nombre"]."</td>";
                echo '<td><a href="../controlador/eliminar_persona.php?id='."$id".'"><button>Borrar</button></a></td>'; 
                echo '<td><a href="../vista/formulario_modificar_persona.php?id='."$id".'"><button>Modificar</button></a></td>';           
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

</body>
</html>