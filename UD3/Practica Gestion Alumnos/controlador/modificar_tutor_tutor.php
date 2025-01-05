<?php
    // Nos unimos a la sesion
    session_start();
    // Y comprobamos que el usuario que se haya autenticado, y que sea administrador
    if(!isset($_SESSION["user"])){
        // Si no se ha autenticado, redirigimos al login
        header("Location: index.html");
    }
?>
<?php
    
    include("../config/conexionPDO.php");

     //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        try{
            $id = $_GET["id"];
            //$id = 3;
            $login = $_POST["login"];
            $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
            $correo = $_POST["correo"];
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];


            //Prepara lo consulta de insert
            $sql = "update tutor set login = :login, password =:password, correo = :correo, nombre = :nombre, apellidos = :apellidos where id_tutor = :id";
            $sentencia = $conexion->prepare($sql);

            //Vinculo la variable al parámetro
            //indicando tipo de valor, s para string, i para int
            $sentencia->bindValue(':login',$login,PDO::PARAM_STR);
            $sentencia->bindValue(':password',$password,PDO::PARAM_STR);
            $sentencia->bindValue(':correo',$correo,PDO::PARAM_STR);
            $sentencia->bindValue(':nombre',$nombre,PDO::PARAM_STR);
            $sentencia->bindValue(':apellidos',$apellidos,PDO::PARAM_STR);
            $sentencia->bindValue(':id',$id,PDO::PARAM_INT);

            $sentencia->execute();
            //Todo correcto
            //Aquí podemos redireccionar a un listado de los datos:
            header("Location: ../vista/listar_tutor_tutor.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        //Desconectamos
        $conexion->close();
    }
?>