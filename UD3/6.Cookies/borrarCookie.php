<?php
/*function borrarCookie($nombrecookie){*/

$nombrecookie = 'fondo';

    if(isset($nombrecookie)){
        setcookie($nombrecookie, '', time()-3600*24);
        echo "Cookies borradas :D";
    }else{
        echo "La cookie llamada ".$nombrecookie." no existe";
    }   
/*}*/