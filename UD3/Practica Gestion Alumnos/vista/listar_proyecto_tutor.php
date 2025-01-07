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
    <title>PROYECTOS</title>
    <style>
        .logos{
            height:50px;
            width:auto;
        }
    </style>
</head>
<body>
    <header><h1>Base de datos de proyecto</h1></header>
    <a href="../controlador/cerrar_sesion.php"><button>Cerrar sesión</button></a>

    <?php
    include("../config/conexionPDO.php");

    //CONSULTA BASE DE DATOS

    function foranea($tabla,$target,$mod,$conexion){
        $sql = "select * from $tabla where id_$tabla=$mod";
        $sentencia = $conexion->query($sql);
        $sentencia->execute();
        $modList=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        foreach ($modList as $mod) {
            return $mod[$target];
        } 
    }

    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{

        $tutor = $_SESSION["user"];

        $sql = "select * from proyecto where tutor=$tutor";
        $sentencia = $conexion->query($sql);
        $sentencia->execute();
        $listaPersonas=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        $numRegistros = $sentencia->rowCount();
        echo "<h1>Número de registros: ".$numRegistros."</h1>";

        if($numRegistros>0){
            //Recorremos los resultados
            echo '<table border="solid">';
            echo "<tr><th>ID</th><th>TÍTULO</th><th>DESCRIPCIÓN</th><th>PERÍODO</th><th>CURSO</th><th>FECHA_PRESENTACIÓN</th><th>NOTA</th><th>PDF</th><th>LOGOTIPO</th><th>MODULO 1</th><th>MODULO 2</th><th>MODULO 3</th><th>ALUMNO</th><th>TUTOR</th></tr>";
            foreach ($listaPersonas as $persona) {
                $id = $persona["id_proyecto"];
                echo "<tr><td>".$persona["id_proyecto"]."</td><td>".$persona["titulo"]."</td><td>".$persona["descripcion"]."</td>";
                echo "<td>".$persona["periodo"]."</td><td>".$persona["curso"]."</td>";
                echo "<td>".$persona["fecha_presentacion"]."</td><td>".$persona["nota"]."</td><td>".$persona["pdf"]."</td>";
                echo "<td><img class='logos' src='data:image/png;base64," . base64_encode($persona["logotipo"]) . "' alt='imagen'/></td>";
                echo "<td>".foranea("modulo","siglas",$persona["modulo1"],$conexion)."</td><td>".foranea("modulo","siglas",$persona["modulo2"],$conexion)."</td><td>".foranea("modulo","siglas",$persona["modulo3"],$conexion)."</td>";
                echo "<td>".foranea("alumnos","DNI",$persona["alumno"],$conexion)."</td><td>".foranea("tutor","login",$persona["tutor"],$conexion)."</td>";
                echo '<td><a href="../controlador/descarga_pdf.php?id='."$id".'"><button>Descarga PDF</button>';
            }
            echo "</table>";
            

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