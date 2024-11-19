<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de login</title>       
        <meta charset = "UTF-8">
    </head>
    <body> 
        <?php
            $id=$_GET["id"];
            //$id = 3;

            include("../config/conexion.php");

            //CONSULTA BASE DE DATOS
            $conexion = conexion(); 
            if($conexion==null){
                echo "Fallo de conexión";
            }else{
                $consulta = "select * from persona where id_persona=$id";
                $resultado = $conexion->query($consulta);
                $numRegistros=$resultado->num_rows;

                $listaPersonas=$resultado->fetch_all(MYSQLI_ASSOC);
                echo "<h1>Número de registros: ".$numRegistros."</h1>";

                if($numRegistros>0){
                    //Recorremos los resultados
                    foreach ($listaPersonas as $persona) {
                        $nombre = $persona["nombre"];
                    }
                    

                }else{
                    //error
                }

                //limpiar datos de memoria
                $resultado->free();

                //cerrar conexión
                $conexion->close();
            }

        ?>
        <form action = "../controlador/modificar_persona.php?id=<?php echo $id?>" method = "POST">           
            Nombre: <input name = "nombre" type = "text" placeholder="<?php echo $nombre?>">
            <input type = "submit" value="Modificar">
        </form>
    </body>
</html>