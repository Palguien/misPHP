<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROYECTOS</title>
</head>
<body>
    <header><h1>Base de datos de proyecto</h1></header>

    <form action = "../vista/formulario_agregar_proyecto.php" method = "POST">           
        <input type="submit" name="" value="Agregar" id="boton1">
    </form>
    <form action = "../vista/listar_proyecto.php" method = "POST">           
        <input type="submit" name="" value="Volver" id="boton1">
    </form>
    <?php
    include("../config/conexionPDO.php");

    //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        $sql = "select * from rebajas_pablo where rebajada = 1 order by rebaja desc";
        $sentencia = $conexion->query($sql);
        $sentencia->execute();
        $listaPersonas=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        $numRegistros = $sentencia->rowCount();
        echo "<h1>Número de registros: ".$numRegistros."</h1>";

        if($numRegistros>0){
            //Recorremos los resultados
            echo '<table border="solid">';
            echo "<tr><th>ID</th><th>PRENDA</th><th>PRECIO</th><th>REBAJADA</th><th>REBAJA</th><th>DESCUENTO</th><th>PRECIO FINAL</th><th>FOTO</th>";
            foreach ($listaPersonas as $persona) {
                $id = $persona["id_prenda"];
                $descuento = $persona["precio"]*$persona["rebaja"]/100;
                $precioFinal= $persona["precio"] - $descuento;
                echo "<tr><td>".$persona["id_prenda"]."</td><td>".$persona["prenda"]."</td><td>".$persona["precio"]."$</td>";
                echo "<td>".$persona["rebajada"]."</td><td>".$persona["rebaja"]."</td>";
                echo "<td>".$descuento."$</td><td>".$precioFinal."$</td>";
                echo "<td><img class='logos' src='data:image/png;base64," . base64_encode($persona["foto"]) . "' alt='imagen'/></td>";
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