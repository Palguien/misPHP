<?php
//Pablo Pollos Iglesias

    //Condición simple
    if(2+2==4){
        echo "Las matemáticas funcionan</br>";
    }
    //Condición compuesta
    $var =true;
    if($var){
        echo "Verdadero</br>";
    }else{
        echo "Falso</br>";
    }
    //Condiciones anidadas
    $var=0;
    if($var>0){
        echo "Positivo</br>";
    }elseif($var<0){
        echo "Negativo</br>";
    }else{
        echo "Cero</br>";
    }
    //Condiciones múltiples (Switch)
    $dia = 6; // La hora en formato de 24 horas
    switch ($dia) {
        case 1:
        case 2:
        case 3:
        case 4;
        case 5;
            echo "Día laboral</br>";
            break;
        case 6:
        case 7:
            echo "Fin de semana</br>";
            break;
        default:
            echo "Error</br>";
    }
    //Operador ternario
    $num = 7;
    $resul = ($num % 2==0) ? "par</br>" : "impar</br>";
    echo $resul;

?>