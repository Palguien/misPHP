<?php
/*function borrarCookie($nombrecookie){*/

$nombrecookie = 'fondo';

    if(isset($nombrecookie)){
        setcookie($nombrecookie, '', time()-3600*48);
        echo "Cookies borradas :D";
    }else{
        echo "La cookie llamada ".$nombrecookie." no existe";
    }

    echo "<br><a href='403cookieFondo.php'>Volver</a><br>";
/*}*/