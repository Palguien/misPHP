<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos">
    <title>228</title>
</head>
<body>
<form method="GET" action="">
    Número1:<input name="numero1" type="number">
    Número2:<input name="numero2" type="number">
    Enviar:<input name="enviar" type="submit">
</form>
<?php
    /*haciendo uso de un array que almacene el nombre de las funciones del archivo anterior, a partir de dos números 
    recibidos por URL, recorre el array e invoca a las funciones de manera dinámica haciendo uso de funciones variable.*/
    $num1 = $_GET["numero1"];
    $num2 = $_GET["numero2"];
    include_once("228biblioteca.php");
    $arr=["sumar","restar","multiplicar","dividir"];
    foreach ($arr as $key) {
        echo $key.": ".$key($num1,$num2)."<br>";
    }
?>

</body>
</html>