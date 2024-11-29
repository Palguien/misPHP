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
                $sql = "select * from tareas where titulo = '$id'";
                $sentencia = $conexion->query($sql);
                $sentencia->execute();
                $listaPersonas=$sentencia->fetchAll(PDO::FETCH_ASSOC);

                $numRegistros = $sentencia->rowCount();
                echo "<h1>Número de registros: ".$numRegistros."</h1>";

                if($numRegistros>0){
                    //Recorremos los resultados
                    foreach ($listaPersonas as $persona) {
                        $titulo = $persona["titulo"];
                        $descripcion = $persona["descripcion"];
                        $prioridad = $persona["prioridad"];
                        $realizada = $persona["realizada"];
                        $fecha = $persona["fecha"];
                        //$pdf = $persona["pdf"];
                        //$logotipo = $persona["logotipo"];
                    }
                    

                }else{
                    //error
                }

                //cerrar conexión
                $conexion = null;
            }

        ?>
        <form action = "../controlador/modificar_proyecto.php?id=<?php echo $id?>" method = "POST">                 
            Descripción: <input name = "descripcion" type = "text" placeholder="<?php echo $descripcion?>"><br>
            Prioridad: <input name = "prioridad" type = "number" max="3" min="1" placeholder="<?php echo $prioridad?>"><br>
            Realizada: <input name = "realizada" type = "number" max="1" min="0" placeholder="<?php echo $realizada?>"><br>
            Fecha: <input name = "fecha" type = "date" placeholder="<?php echo $fecha?>"><br>
            Imagen: <input name = "logotipo" type = "file" accept="image/png"><br>
            <input type = "submit" value="Modificar">
        </form>
    </body>
</html>