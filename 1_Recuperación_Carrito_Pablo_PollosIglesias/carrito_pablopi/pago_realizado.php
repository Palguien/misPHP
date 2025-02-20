<?php
require_once 'Libro.php';
require_once 'controlador_libro.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Movimientos realizado</title>
</head>

<body>
    <?php
    //Pablo Pollos Iglesias
    //Simula el pago de los libros mostrando un mensaje
    echo "<p>Movimientos realizados</p>";
    //Da la posiblidad de volver al listado de libros a comprar
    foreach ($_SESSION['carrito'] as $producto){
        if($producto[1]>0){
            $subtotal = $producto[1]*$producto[0]->getPrecio();
            echo "<li>".$producto[1]." - ".$producto[0]->getTitulo()." - ".$producto[0]->getPrecio()."&euro; - Subtotal = ".$subtotal." euros</li>";
            $total = $total + $subtotal;
        }
    }
    $_SESSION['carrito'][0][1] = 0;
    $_SESSION['carrito'][1][1] = 0;
    $_SESSION['cuenta'][1] = $_SESSION['cuenta'][1]+$total;
    echo "<p> El carrito ha sido vaciado.</p>";
    ?>
    <p><a href="carrito_libro.php">Volver al carrito</a></p>

</body>

</html>