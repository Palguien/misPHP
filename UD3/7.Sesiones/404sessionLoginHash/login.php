<?php
    if(isset($_POST["enviar"])){
        $pwd="admin";
        $usuario = $_POST["user"];
        $password = $_POST["pass"];

        // Validamos que recibimos ambos parametros
        if(empty($usuario) || empty($password)){
            $error = "Debes introducir un usuario y contraseña";
            include "index.php";
        }else{
            if($usuario == "admin" && password_verify($password,password_hash($pwd, PASSWORD_DEFAULT))){
                // Almacenamos la informacion en la sesion
                session_start();
                $_SESSION["user"] = $usuario;

                // Cargamos la página principal
                include "main.php";
            }else{
                // Si las credenciales no son validas, se vuelven a pedir
                $error = "Usuario o contraseña no válidos!";
                include "index.php";
            }
        }

    }
?>