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
        <form action = "../controlador/insertar_tutor_registro.php" method = "POST" enctype="multipart/form-data">
            Usuario: <input name = "login" type = "text" required><br>       
            Contraseña: <input name = "password" type = "text" required><br>
            Correo: <input name = "correo" type = "email" required><br>
            Nombre: <input name = "nombre" type = "text" required><br>
            Apellidos: <input name = "apellidos" type = "text" required><br>

            <br><input type = "submit">
        </form>
    </body>
</html>