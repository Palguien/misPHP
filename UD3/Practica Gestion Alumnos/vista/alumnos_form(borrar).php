<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Consulta donde obtengo la lista de los alumnos
    //La guardo en $listaAlumnos
    include("../config/conexionPDO.php");

    //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        $sql = "select * from alumnos";
        $sentencia = $conexion->query($sql);
        $sentencia->execute();
        $listaAlumnos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        $sql = "select * from modulo";
        $sentencia = $conexion->query($sql);
        $sentencia->execute();
        $listaModulos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        $conexion = null;
    }
    //Recorremos el $listaAlumnos
    ?>
    Alumno:<select name="alumno" id="alumno"]>
    <?php 
    foreach ($listaAlumnos as $alumno){?>
        <option value=<?=$alumno['id_alumnos']?>>
            <?=$alumno["nombre"]?>
        </option>
    <?php ;}?>
    </select>
    Modulo 1:<select name="modulo1" id="modulo1"]>
    <?php 
    foreach ($listaModulos as $modulo){?>
        <option value=<?=$modulo['id_modulo']?>>
            <?=$modulo["siglas"]?>
        </option>
    <?php ;}?>
    </select>
    Modulo 2:<select name="modulo2" id="modulo2"]>
    <?php 
    foreach ($listaModulos as $modulo){?>
        <option value=<?=$modulo['id_modulo']?>>
            <?=$modulo["siglas"]?>
        </option>
    <?php ;}?>
    </select>
    Modulo 3:<select name="modulo3" id="modulo3"]>
    <?php 
    foreach ($listaModulos as $modulo){?>
        <option value=<?=$modulo['id_modulo']?>>
            <?=$modulo["siglas"]?>
        </option>
    <?php ;}?>
    </select>
</body>
</html>