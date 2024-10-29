<?php
    echo "Usuario introducido: " . $_POST['usuario']. "<br>";
    echo "Clave introducida: " . $_POST['clave']."<br>";

    if(isset($_POST["usuario"], $_POST["clave"])){ //Deben existir ambos 
        echo "Hola, ". $_POST["usuario"]." tienes ".$_POST["clave"]." clave.";    
    }else{
        echo "Error, falta el usuario y/o clave";
    }
?>