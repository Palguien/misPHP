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
                $sql = "select * from proyecto where id_proyecto = $id";
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
                        $periodo = $persona["periodo"];
                        $curso = $persona["curso"];
                        $fecha_presentacion = $persona["fecha_presentacion"];
                        $nota = $persona["nota"];
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
            Título: <input name = "titulo" type = "text" placeholder="<?php echo $titulo?>"><br>       
            Descripción: <input name = "descripcion" type = "text" placeholder="<?php echo $descripcion?>"><br>
            Período: <input name = "periodo" type = "text" placeholder="<?php echo $periodo?>"><br>
            Curso: <input name = "curso" type = "text" placeholder="<?php echo $curso?>"><br>
            Fecha Presentación: <input name = "fecha_presentacion" type = "date" placeholder="<?php echo $fecha_presentacion?>"><br>
            Nota: <input name = "nota" type = "number" placeholder="<?php echo $nota?>"><br>
            Pdf: <input name = "pdf" type = "text" ><br>
            Logotipo: <input name = "logotipo" type = "file" accept="image/png"><br>
            <input type = "submit" value="Modificar">
        </form>
    </body>
</html>