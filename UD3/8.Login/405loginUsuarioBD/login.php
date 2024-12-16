<?php
    include("conexionPDO.php");
    $conexion = conexion(); 

    if(isset($_POST["enviar"])){

        $usuario = $_POST["user"];
        $password = $_POST["pass"];

        // Validamos que recibimos ambos parametros
        if(empty($usuario) || empty($password)){
            $error = "Debes introducir un usuario y contraseña";
            include "index.php";
        }else{
            $sql = "select * from users where usuario ='$usuario'";
            $sentencia = $conexion->query($sql);
            $sentencia->execute();
            $lista=$sentencia->fetchAll(PDO::FETCH_ASSOC);

            $numRegistros = $sentencia->rowCount();

            foreach ($lista as $user) {
                $hashPwd = $user["password"];
                $tipo_usu= $user["tipo_usu"];
            }

            //Desconectamos
            $conexion = null;

            if($numRegistros==1){

                if($tipo_usu == 1 && password_verify($password,$hashPwd)){
                    // Almacenamos la informacion en la sesion
                    session_start();
                    $_SESSION["user"] = $usuario;
                    $_SESSION["permission"] = $tipo_usu;
    
                    // Cargamos la página principal
                    header("Location: index_admin.php");
                }elseif ($tipo_usu == 2 && password_verify($password,$hashPwd)) {
                    session_start();
                    $_SESSION["user"] = $usuario;
                    $_SESSION["permission"] = $tipo_usu;
    
                    // Cargamos la página principal
                    header("Location: index_user.php");
                }else{
                    // Si las credenciales no son validas, se vuelven a pedir
                    $error = "Usuario o contraseña no válidos! (No coincide usuario y contraseña)";
                    include "index.php";
                }
            }else{
                // Si las credenciales no son validas, se vuelven a pedir
                $error = "Usuario o contraseña no válidos! (No está en la base de datos).$numRegistros";
                include "index.php";
            }



            
        }

    }
?>