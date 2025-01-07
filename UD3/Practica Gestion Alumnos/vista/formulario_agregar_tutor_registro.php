<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de login</title>       
        <meta charset = "UTF-8">
    </head>
    <body>   
        <form action = "../controlador/insertar_tutor_registro.php" method = "POST" enctype="multipart/form-data">
            Usuario: <input name = "login" type = "text" required>(Debe ser único)<br>       
            Contraseña: <input name = "password" type = "text" required><br>
            Correo: <input name = "correo" type = "email" required>(Debe ser único)<br>
            Nombre: <input name = "nombre" type = "text" required><br>
            Apellidos: <input name = "apellidos" type = "text" required><br>

            <br><input type = "submit">
        </form>
    </body>
</html>