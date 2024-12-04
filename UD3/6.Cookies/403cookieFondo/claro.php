<?php
/*function borrarCookie($nombrecookie){*/

$nombrecookie = 'fondo';

    if(isset($nombrecookie)){
        setcookie($nombrecookie, 'claro', time()+3600*48);
        echo "Fondo claro predeterminado";
    }else{
        echo "La cookie llamada ".$nombrecookie." no existe";
    }

    echo "<br><a href='403cookieFondo.php'>Volver</a><br>";
/*}*/