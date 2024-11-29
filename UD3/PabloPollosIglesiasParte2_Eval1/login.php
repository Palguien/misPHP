<?php

        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];

        if(isset($_POST["usuario"], $_POST["clave"])){ //Deben existir ambos 
            if($usuario!="james_bon"){
                echo "<br>Error, usuario incorrecto";
            }
            if($clave!="007"){
                echo "<br>Error, clave incorrecta";
            }
            if($usuario=="james_bon" && $clave=="007"){
                echo "Correcto";
                //header(header: "location:login_procesar.html");
            }
        }else{
            echo "Error, falta el usuario y/o clave";
        }
?>