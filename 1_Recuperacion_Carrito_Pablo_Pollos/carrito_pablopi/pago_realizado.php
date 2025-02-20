<?php
require_once 'Libro.php';
require_once 'controlador_libro.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pago de libros realizado</title>
</head>

<body>
    <h1>Pago de libros realizado</h1>
    <?php
    //Simula el pago de los libros mostrando un mensaje
    echo "<p>Compra realizada</p>";
    //Da la posiblidad de volver al listado de libros a comprar
    $_SESSION['carrito'][0][1] = 0;
    $_SESSION['carrito'][1][1] = 0;
    $_SESSION['carrito'][2][1] = 0;
    echo "<p> El carrito ha sido vaciado.</p>";
    ?>
    <p><a href="libros.php">Volver al listado de libros</a></p>

</body>

</html>