<?php
//Pablo Pollos

function calculaSueldo($edad, $sueldo){
    $arrAso = array (
        "edad" => $edad,
        "sueldoAnterior" => $sueldo,
        "nuevoSueldo" => 0,
    );
    if($sueldo>3000){
        $arrAso["nuevoSueldo"]=$sueldo;
    }elseif ($sueldo>2000) {
        if($edad>40){
            $arrAso["nuevoSueldo"]=$sueldo*1.2;
        }else{
            $arrAso["nuevoSueldo"]=$sueldo*1.13;
        }
    }else{
        if($edad<30){
            $arrAso["nuevoSueldo"]=2030;
        }elseif ($edad>=30 && $edad<40) {
            $arrAso["nuevoSueldo"]=$sueldo*1.04;
        }else{
            $arrAso["nuevoSueldo"]=$sueldo*1.15;
        }
    }
    echo "Fecha del cambio: ".date("d-m-Y")."<br>";
    print_r($arrAso);
    return $arrAso["nuevoSueldo"];
}

//main de ejemplo
echo "<hr>".calculaSueldo(35,2500);


?>