<?php
//Pablo Pollos Iglesias
    
    //CADENAS
    echo "CAD"."ENAS</br>";
    $var = 'cadena';
    echo 'La variable $var escrita entre comillas simples</br>';
    echo "La variable $var escrita entre comillas dobles</br>";


    //VARIABLES GLOBALES TEORÍA
    //$_SERVER es un array que contiene información, tales como cabeceras, rutas y ubicaciones de script. Las entradas de este array son creadas por el servidor web. 
    //$_GET es un array que se rellena con todas las solicitudes con una cadena de consulta de un script URL. 
    //$_POST es un array de variables pasadas al script actual a través del método POST de HTTP 
    //$_FILES un array de elementos subidos al script en curso a través del método POST
    //$_REQUEST es un array que por defecto contiene el contenido de $_GET, $_POST y $_COOKIE. 
    //$_SESSION es un array que contiene variables de sesión disponibles para el script actual
    //$_ENV es un de variables pasadas al script actual a través del método del entorno. 
    //$_COOKIE es un de variables pasadas al script actual a través de Cookies HTTP. 
    echo "VARIABLES GLOBALES<br/>";
    echo '$_SERVER<br/>';
    //IP
    echo "('SERVER_ADDR') IP del servidor: ";
    echo $_SERVER['SERVER_ADDR'];
    echo "<br/>";
    //nombre servidor
    echo "('SERVER_NAME') Nombre del servidor: ";
    echo $_SERVER['SERVER_NAME'];
    echo "<br/>";
    //ruta
    echo "('SCRIPT_FILENAME') Ruta del servidor: ";
    echo $_SERVER['SCRIPT_FILENAME'];
