<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="crearEquipo.php" method="post">
        Nombre:<input type= "text" name="nombre">
        Socios:<input type= "number" name="socios">
        Fundación:<input type= "text" name="fundacion">
        Ciudad:<input type= "text" name="ciudad">
        <input type= "submit" name="agregar" value="Agregar">
    </form>

    <form action="borrarEquipo.php" method="post">
        Id:<input type= "number" name="id">
        <input type= "submit" name="agregar" value="Borrar">
    </form>

    <form action="jugador_equipo.php" method="post">
        Id:<input type= "number" name="id">
        <input type= "submit" name="agregar" value="Info Jugador">
    </form>

    <form action="probar_bidireccional.php" method="post">
        Id:<input type= "number" name="id">
        <input type= "submit" name="agregar" value="Lista Equipo">
    </form>

    <form action="findBy.php" method="post">
        Ciudad:<input type= "text" name="ciudad">
        <input type= "submit" name="agregar" value="Equipos Ciudad">
    </form>
</body>
</html>