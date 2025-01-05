<?php
    // Nos unimos a la sesion
    session_start();
    // Y comprobamos que el usuario que se haya autenticado, y que sea administrador
    if(!isset($_SESSION["user"])){
        // Si no se ha autenticado, redirigimos al login
        header("Location: index.html");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUTOR</title>
</head>
<body>
    <h1>Hola Tutor</h1>
    <table border="solid">
        <tr>
            <td><a href="vista/listar_tutor_tutor.php"><button>Datos</button></a></td>
            <td><a href="vista/listar_alumnos_tutor.php"><button>Alumnos</button></a></td>
            <td><a href="vista/listar_proyecto_tutor.php"><button>Proyectos</button></a></td>
        </tr>
    </table>

</body>
</html>