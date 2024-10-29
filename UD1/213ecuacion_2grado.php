<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos Iglesias">
    <title>213</title>
</head>
<body>
<?php
//Pablo Pollos
    
    /*Crea un programa que resuelva una ecuación de 2º grado del tipo ax² + bx + c = 0. 
    Ten en cuenta que puede tener 2, 1 o no tener solución dependiendo del valor del 
    discriminante b²-4ac. Para calcular la raíz cuadrada deberás utilizar la función sqrt().*/ 
    $a = 3;$b = -5;$c=2;
    echo "($a)x^2+($b)x+($c)<hr>";
    $discriminante = $b*$b-4*$a*$c;
    if($discriminante==0){
        echo "Solución = ".(-$b)/(2*$a);
    }elseif ($discriminante<0) {
        echo "No hay solución";
    }else{
        echo "Solución 1 = ".(-$b+sqrt($discriminante))/(2*$a)."<br>";
        echo "Solución 2 = ".(-$b-sqrt($discriminante))/(2*$a);
    }
    
?>
</body>
</html>