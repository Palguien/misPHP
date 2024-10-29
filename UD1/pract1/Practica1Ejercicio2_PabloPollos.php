<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos Iglesias">
    <title> Práctica 1 - Ejercicio 2</title>
    <style type="text/css">
        .verde{
            background-color: greenyellow;
        }
    </style>
    
</head>
<body>

<?php
    $datos_notas =[];
    $arrAsoA = array (
        "mediaA" => 0,
        "suspensosA" => 0,
        "aprobadosA" => 0,
    );
    $arrAsoB = array (
        "mediaB" => 0,
        "suspensosB" => 0,
        "aprobadosB" => 0,
    );
    $arrAsoC = array (
        "mediaC" => 0,
        "suspensosC" => 0,
        "aprobadosC" => 0,
    );
    //rellenamos datos_notas 
    $media=0;
    $suspensos=0;
    $aprobados=0;
    $val=0;
    for ($i=0; $i < 90; $i++) { 
        if($i==30){
            $arrAsoA["mediaA"]=$media/30;
            $arrAsoA["suspensosA"]=$suspensos;
            $arrAsoA["aprobadosA"]=$aprobados;
            $media=0;
            $suspensos=0;
            $aprobados=0;
        }
        if($i==60){
            $arrAsoB["mediaB"]=$media/30;
            $arrAsoB["suspensosB"]=$suspensos;
            $arrAsoB["aprobadosB"]=$aprobados;
            $media=0;
            $suspensos=0;
            $aprobados=0;
        }
        $val=rand(0,10);
        $media=$media+$val;
        array_push($datos_notas,$val);
        if($val>=5){
            $aprobados++;
        }else{
            $suspensos++;
        }
    }
    $arrAsoC["mediaC"]=$media/30;
    $arrAsoC["suspensosC"]=$suspensos;
    $arrAsoC["aprobadosC"]=$aprobados;
    
    echo '<table border="solid">';
    echo "<tr><th>Clase</th><th>Media</th><th>Suspensos</th><th>Aprobados</th></tr>";
    if($arrAsoA["mediaA"]>$arrAsoB["mediaB"] && $arrAsoA["mediaA"]>$arrAsoC["mediaC"]){
        echo '<tr class="verde"><td>A</td>';
    }else{
        echo "<tr><td>A</td>";
    }
    foreach ($arrAsoA as $key => $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
    if($arrAsoB["mediaB"]>$arrAsoA["mediaA"] && $arrAsoB["mediaB"]>$arrAsoC["mediaC"]){
        echo '<tr class="verde"><td>B</td>';
    }else{
        echo "<tr><td>B</td>";
    }
    foreach ($arrAsoB as $key => $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
    if($arrAsoC["mediaC"]>$arrAsoB["mediaB"] && $arrAsoC["mediaC"]>$arrAsoA["mediaA"]){
        echo '<tr class="verde"><td>C</td>';
    }else{
        echo "<tr><td>C</td>";
    }
    foreach ($arrAsoC as $key => $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
    echo "</table>";
    
    
?>
</body>
</html>