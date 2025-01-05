<?php
    // Nos unimos a la sesion
    session_start();
    // Y comprobamos que el usuario que se haya autenticado, y que sea administrador
    if(!isset($_SESSION["user"]) || $_SESSION["tipo"]==2){
        // Si no se ha autenticado, redirigimos al login
        header("Location: index.html");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>
<body>
    <h1>Hola Administrador</h1>
    <table border="solid">
        <tr>
            <td><a href="vista/listar_proyecto.php"><button>Proyectos</button></a></td>
            <td><a href="vista/listar_tutor.php"><button>Tutores</button></a></td>
            <td><a href="vista/listar_alumnos.php"><button>Alumnos</button></a></td>
            <td><a href="tutor.php"><button>Vista tutor</button></a></td>
        </tr>
    </table>

</body>
</html>