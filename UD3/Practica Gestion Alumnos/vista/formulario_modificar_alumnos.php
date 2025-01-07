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
        <?php
            $id=$_GET["id"];
            //$id = 3;

            include("../config/conexion.php");

            //CONSULTA BASE DE DATOS
            $conexion = conexion(); 
            if($conexion==null){
                echo "Fallo de conexión";
            }else{
                $consulta = "select * from alumnos where id_alumnos=$id";
                $resultado = $conexion->query($consulta);
                $numRegistros=$resultado->num_rows;

                $listaPersonas=$resultado->fetch_all(MYSQLI_ASSOC);
                echo "<h1>Número de registros: ".$numRegistros."</h1>";

                if($numRegistros>0){
                    //Recorremos los resultados
                    foreach ($listaPersonas as $persona) {
                        $dni = $persona["DNI"];
                        $nombre = $persona["nombre"];
                        $apellido1 = $persona["apellido1"];
                        $apellido2 = $persona["apellido2"];
                        $email = $persona["email"];
                        $telefono = $persona["telefono"];
                        $curso = $persona["curso"];
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
        <form action = "../controlador/modificar_alumnos.php?id=<?php echo $id?>" method = "POST">           
            DNI: <input name = "dni" type = "text" placeholder="<?php echo $dni?>" required>(Debe ser único)<br>
            Nombre: <input name = "nombre" type = "text" placeholder="<?php echo $nombre?>" required><br>
            Apellido1: <input name = "apellido1" type = "text" placeholder="<?php echo $apellido1?>" required><br>
            Apellido2: <input name = "apellido2" type = "text" placeholder="<?php echo $apellido2?>"><br>
            Email: <input name = "email" type = "email" placeholder="<?php echo $email?>">(Debe ser único)<br>
            Teléfono: <input name = "telefono" type = "number" placeholder="<?php echo $telefono?>">(Debe ser único)<br>
            Curso: <input name = "curso" type = "text" placeholder="<?php echo $curso?>"><br>
            <input type = "submit" value="Modificar">
        </form>
    </body>
</html>