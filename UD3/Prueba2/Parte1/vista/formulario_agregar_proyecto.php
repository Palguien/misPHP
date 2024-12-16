<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de login</title>       
        <meta charset = "UTF-8">
    </head>
    <body>   
        <form action = "../controlador/insertar_proyecto.php" method = "POST" enctype="multipart/form-data">
            Prenda: <input name = "prenda" type = "text"><br>       
            Precio: <input name = "precio" type = "number" min="0"><br>
            Rebajada: <input name = "rebajada" type = "number" min="0" max="1"><br>
            Rebaja: <input name = "rebaja" type = "number" min="0" max="100"><br>
            Foto: <input name = "foto" id="foto" type = "file" accept="image/png"><br>

            <br><input type = "submit">
        </form>
    </body>
</html>