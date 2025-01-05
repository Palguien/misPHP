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
        <form action = "../controlador/insertar_tutor.php" method = "POST" enctype="multipart/form-data">
            Usuario: <input name = "login" type = "text"><br>       
            Contraseña: <input name = "password" type = "text"><br>
            Correo: <input name = "correo" type = "email"><br>
            Nombre: <input name = "nombre" type = "text"><br>
            Apellidos: <input name = "apellidos" type = "text"><br>

            <br><input type = "submit">
        </form>
    </body>
</html>