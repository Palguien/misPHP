<?php
//Pablo Pollos Iglesias

    /*Crear un array asociativo, donde guardes de 5 países (claves) sus capitales (valor). 
    Recorre el array mostrando por cada país toda la información ("La capital de España es Madrid").
    En ese mismo recorrido crea dos arrays simples, uno que contenga las capitales y otro los países. 
    Recórrelos, en este caso con un for. 210array_asociativo.php.*/
    
    //Declaración de array asociativo
    $arrAso = array (
        "España" => "Madrid",
        "Francia" => "París",
        "Alemania" => "Berlín",
        "Alemania del Este" => "Berlín",
        "Italia" => "Roma"
    );
    //creación y llenado de arrays simples
    $arrCap = [];
    $arrPais = [];
    foreach ($arrAso as $pais => $nombre) {
        echo "La capital de $pais es $nombre</br>"; 
        $arrPais[]=$pais;  
        $arrCap[]=$nombre;  
    }   
    //Lectura de arrays simples
    echo "Paises: ";
    for ($i=0; $i < count($arrPais); $i++) { 
        echo "[".$arrPais[$i]."] ";
    }
    echo "<br>";
    echo "Capitales:";
    for ($i=0; $i < count($arrCap); $i++) { 
        echo "[".$arrPais[$i]."] ";
    }

