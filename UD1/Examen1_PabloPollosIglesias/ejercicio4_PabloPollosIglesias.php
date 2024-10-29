<?php
//Pablo Pollos

function operandoValores(...$numeros){
    
    $arrAso = array (
        "suma" => 0,
        "producto" => 1,
    );

    foreach ($numeros as $key) {
        $arrAso["suma"]+=$key;
        $arrAso["producto"]=$arrAso["producto"]*$key;
    }

    return $arrAso;
}

//main de ejemplo
$arr = operandoValores(1,2,3,4);
foreach ($arr as $key => $value) {
    echo "$key = $value<br>";
}

?>