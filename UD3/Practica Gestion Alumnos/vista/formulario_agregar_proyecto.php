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
<html>
    <head>
        <title>Formulario de login</title>       
        <meta charset = "UTF-8">
    </head>
    <body>   
        <form action = "../controlador/insertar_proyecto.php" method = "POST" enctype="multipart/form-data">
            Título: <input name = "titulo" type = "text"><br>       
            Descripción: <input name = "descripcion" type = "text"><br>
            Período: <input name = "periodo" type = "text"><br>
            Curso: <input name = "curso" type = "text"><br>
            Fecha Presentación: <input name = "fecha_presentacion" type = "date"><br>
            Nota: <input name = "nota" type = "number"><br>
            Pdf: <input name = "pdf" type = "file" accept="file/pdf"><br>
            Logotipo: <input name = "logotipo" id="logotipo" type = "file" accept="image/png"><br>

            <?php
            //Consulta donde obtengo la lista de los alumnos
            //La guardo en $listaAlumnos
            include("../config/conexionPDO.php");

            //CONSULTA BASE DE DATOS
            $conexion = conexion(); 
            if($conexion==null){
                echo "Fallo de conexión";
            }else{
                $sql = "select * from alumnos";
                $sentencia = $conexion->query($sql);
                $sentencia->execute();
                $listaAlumnos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

                $sql = "select * from tutor where activar=1";
                $sentencia = $conexion->query($sql);
                $sentencia->execute();
                $listaTutor=$sentencia->fetchAll(PDO::FETCH_ASSOC);

                $sql = "select * from modulo";
                $sentencia = $conexion->query($sql);
                $sentencia->execute();
                $listaModulos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

                $conexion = null;
            }
            //Recorremos el $listaAlumnos
            ?>
            Alumno:<select name="alumno" id="alumno"]>
            <?php 
            foreach ($listaAlumnos as $alumno){?>
                <option value=<?=$alumno['id_alumnos']?>>
                    <?=$alumno["nombre"]?>
                </option>
            <?php ;}?>
            </select><br>
            Tutor:<select name="tutor" id="tutor"]>
            <?php 
            foreach ($listaTutor as $tutor){?>
                <option value=<?=$tutor['id_tutor']?>>
                    <?=$tutor["login"]?>
                </option>
            <?php ;}?>
            </select><br>
            Modulo 1:<select name="modulo1" id="modulo1"]>
            <?php 
            foreach ($listaModulos as $modulo){?>
                <option value=<?=$modulo['id_modulo']?>>
                    <?=$modulo["siglas"]?>
                </option>
            <?php ;}?>
            </select><br>
            Modulo 2:<select name="modulo2" id="modulo2"]>
            <?php 
            foreach ($listaModulos as $modulo){?>
                <option value=<?=$modulo['id_modulo']?>>
                    <?=$modulo["siglas"]?>
                </option>
            <?php ;}?>
            </select><br>
            Modulo 3:<select name="modulo3" id="modulo3"]>
            <?php 
            foreach ($listaModulos as $modulo){?>
                <option value=<?=$modulo['id_modulo']?>>
                    <?=$modulo["siglas"]?>
                </option>
            <?php ;}?><br>
            </select>

            <br><input type = "submit">
        </form>
    </body>
</html>