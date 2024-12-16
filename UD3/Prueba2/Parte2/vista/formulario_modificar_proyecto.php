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

            include("../config/conexionPDO.php");

            //CONSULTA BASE DE DATOS
            $conexion = conexion(); 
            if($conexion==null){
                echo "Fallo de conexión";
            }else{
                $sql = "select * from rebajas_pablo where id_prenda = $id";
                $sentencia = $conexion->query($sql);
                $sentencia->execute();
                $listaPersonas=$sentencia->fetchAll(PDO::FETCH_ASSOC);

                $numRegistros = $sentencia->rowCount();
                echo "<h1>Número de registros: ".$numRegistros."</h1>";

                if($numRegistros>0){
                    //Recorremos los resultados
                    foreach ($listaPersonas as $persona) {
                        $prenda = $persona["prenda"];
                        $precio = $persona["precio"];
                        $rebajada = $persona["rebajada"];
                        $rebaja = $persona["rebaja"];

                        //$pdf = $persona["pdf"];
                        //$logotipo = $persona["logotipo"];
                    }
                    

                }else{
                    //error
                }

                
            }

        ?>
        <form action = "../controlador/modificar_proyecto.php?id=<?php echo $id?>" method = "POST">           
            Título: <?php echo $prenda?><br>       
            Precio: <?php echo $precio?><br>
            Rebajada: <input name = "rebajada" type = "number" placeholder="<?php echo $rebajada?>" min="0" max="1"><br>
            Rebaja: <input name = "rebaja" type = "number" placeholder="<?php echo $rebaja?>" min="0" max="100"><br>
            Foto: <br><?php echo "<td><img class='logos' src='data:imagepng;base64," . base64_encode($persona["foto"]) . "' alt='imagen'/></td>"; ?><br>



            <input type = "submit" value="Modificar">
        </form>
        <?php //cerrar conexión
        $conexion = null 
        ?>
    </body>
</html>