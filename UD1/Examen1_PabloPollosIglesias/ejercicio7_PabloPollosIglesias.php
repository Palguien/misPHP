<?php
//Pablo Pollos

function ejemplo(){

    return 1;
}

//main de ejemplo
$ikea = array (
    "armario" => 60,
    "mesa" => 20,
    "comoda" => 30,
    "silla" =>5,
);
$muebles=[];
$pesos=[];
foreach ($ikea as $key => $value) {
    echo "$key : $value<br>";
    array_push($muebles, $key);
    array_push($pesos, $value);
}
echo "Array simple de muebles : ";
print_r($muebles);
echo "<hr>";
echo "Array simple de pesos : ";
print_r($pesos);
echo "<hr>";
print_r($ikea);
echo "<br>Ordenamos por peso: <br>";
$ord=$ikea;
sort($ord);
print_r($ord);
//nuevoArrayAso
//no me funciona la inserción en array asociativo
/*
array_reverse($muebles);
$ikea2 = array (
    
);
for ($i=0; $i < count($muebles); $i++) { 
    array_push($ikea2, $muebles[$i] => $arrAso[$muebles[$i]]);
}
*/
?>