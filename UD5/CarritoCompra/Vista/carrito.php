<?php
require_once '../Modelo/Producto.php';
require_once '../Controlador/controlador.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
    <?php
    if(empty($_SESSION['carrito'])){
        echo "<p>El carrito está vacío</p>";
    }else{
        echo "<h1>Carrito de Productos:</h1>";
        echo "<ul>";
        foreach ($_SESSION['carrito'] as $producto){
            echo "<li>{$producto->getNombre()} - {$producto->getPrecio()}&euro;</li>";
        }
        echo "</ul>";
        echo '<p><a href="realizar_pago.php">Comprar</a></p>';
    }   
    ?>    
    <p><a href="productos.php">Volver a la lista de productos</a></p>

</body>
</html>