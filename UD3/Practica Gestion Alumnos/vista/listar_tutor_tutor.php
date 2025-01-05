<?php
    // Nos unimos a la sesion
    session_start();
    // Y comprobamos que el usuario que se haya autenticado, y que sea administrador
    if(!isset($_SESSION["user"])){
        // Si no se ha autenticado, redirigimos al login
        header("Location: ../index.html");    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUTOR</title>
</head>
<body>
    <header><h1>Datos de tutor</h1></header>

    <?php
    include("../config/conexionPDO.php");

    //CONSULTA BASE DE DATOS

    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        $tutor = $_SESSION["user"];

        $sql = "select * from tutor where baja = 0 and id_tutor=$tutor";
        $sentencia = $conexion->query($sql);
        $sentencia->execute();
        $listaTutores=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        $numRegistros = $sentencia->rowCount();
        echo "<h1>Número de registros: ".$numRegistros."</h1>";

        if($numRegistros>0){
            //Recorremos los resultados
            echo '<table border="solid">';
            echo "<tr><th>ID</th><th>LOGIN</th><th>PASSWORD</th><th>CORREO</th><th>NOMBRE</th><th>APELLIDOS</th></tr>";
            foreach ($listaTutores as $persona) {
                $id = $persona["id_tutor"];
                echo "<tr><td>".$persona["id_tutor"]."</td><td>".$persona["login"]."</td><td>".$persona["password"]."</td>";
                echo "<td>".$persona["correo"]."</td><td>".$persona["nombre"]."</td><td>".$persona["apellidos"]."</td>";

                echo '<td><a href="../vista/formulario_modificar_tutor_tutor.php?id='."$id".'"><button>Modificar</button></a></td></tr>';
                

            }
            echo "</table>";
        }else{
            //error
            echo "<hr><h1>ERROR</h1><hr>";
        }

        //limpiar datos de memoria
        //$resultado->free();

        //cerrar conexión
        $conexion = null;

        
    }

?>
    <footer><h2>Pablo Pollos Iglesias</h2></footer>
</body>
</html>