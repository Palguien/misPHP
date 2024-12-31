<?php
        include("config/conexionPDO.php");
        
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];

        $conexion = conexion(); 
        if($conexion==null){
            echo "Fallo de conexión";
        }else{
            $sql = "select * from tutor where login = '$usuario' and password = '$clave' and activar=1";
            $sentencia = $conexion->query($sql);
            $sentencia->execute();
            $listaTutor=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    
            $numRegistros = $sentencia->rowCount();
            echo "<h1>Número de registros: ".$numRegistros."</h1>";
            if($numRegistros>0){
                //Recorremos los resultados
                foreach ($listaTutor as $tutor) {
                    $tipo = $tutor["tipo_usu"];
                }
                if($tipo==1){
                    echo "<hr><h1>ADMIN</h1><hr>";
                    header("Location: admin.html");
                }else{
                    echo "<hr><h1>TUTOR</h1><hr>";
                    //header("Location: vista/listar_proyecto.php");
                }
            }else{
                echo "<hr><h1>No existe o está inactivo</h1><hr>";
            }
        }
    
?>