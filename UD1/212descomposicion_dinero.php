<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos Iglesias">
    <title>212</title>
</head>
<body>
<?php
//Pablo Pollos
    /*a partir de una cantidad de dinero, mostrar su descomposición en billetes (500, 200, 100, 50, 20, 10, 5) y monedas (2, 1), para que el número de elementos sea mínimo (no se muestra si no hay).*/
    //cantidad total
    $cant=1439;
    echo "Cantidad = $cant<hr>";
    //Array de billetes
    $billetes = [500,200,100,20,10,5,2,1];
    //Recorre el bucle por cada tipo de billete/moneda
    foreach ($billetes as $bill) { 
        if(intval($cant/$bill)>0){
            echo intval($cant/$bill);
            if($bill==2||$bill==1){
                if(intval($cant/$bill)==1){
                    echo " moneda de $bill.<br>";
                }else{
                    echo " monedas de $bill.<br>";
                }
            }else{
                if(intval($cant/$bill)==1){
                    echo " billete de $bill.<br>";
                }else{
                    echo " billetes de $bill.<br>";
                }
            }
            //restar los billetes leídos a la cantidad total
            $cant=$cant%$bill;
        }
            
    }
    
?>
</body>
</html>
