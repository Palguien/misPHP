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

            include("../config/conexionPDO.php");

            //CONSULTA BASE DE DATOS
            $conexion = conexion(); 
            if($conexion==null){
                echo "Fallo de conexión";
            }else{
                $sql = "select * from tutor where id_tutor = $id";
                $sentencia = $conexion->query($sql);
                $sentencia->execute();
                $listaPersonas=$sentencia->fetchAll(PDO::FETCH_ASSOC);

                $numRegistros = $sentencia->rowCount();
                echo "<h1>Número de registros: ".$numRegistros."</h1>";

                if($numRegistros>0){
                    //Recorremos los resultados
                    foreach ($listaPersonas as $persona) {
                        $login = $persona["login"];
                        $password = $persona["password"];
                        $correo = $persona["correo"];
                        $nombre = $persona["nombre"];
                        $apellidos = $persona["apellidos"];
                    }
                    

                }else{
                    //error
                }

                
            }

        ?>
        <form action = "../controlador/modificar_tutor.php?id=<?php echo $id?>" method = "POST">           
            Usuario: <input name = "login" type = "text" placeholder="<?php echo $login?>" required><br>       
            Contraseña: <input name = "password" type = "text" placeholder="<?php echo $password?>" required><br>
            Correo: <input name = "correo" type = "email" placeholder="<?php echo $correo?>" required><br>
            Nombre: <input name = "nombre" type = "text" placeholder="<?php echo $nombre?>" required><br>
            Apellidos: <input name = "apellidos" type = "text" placeholder="<?php echo $apellidos?>" required><br>

            <br><input type = "submit">

            <input type = "submit" value="Modificar">
        </form>
        <?php //cerrar conexión
        $conexion = null 
        ?>
    </body>
</html>