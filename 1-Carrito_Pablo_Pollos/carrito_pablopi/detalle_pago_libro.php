<?php
require_once 'Libro.php';
require_once 'controlador_libro.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Detalle del pago de los libros:</title>
</head>

<body>
    <h1>Detalle del pago de los libros</h1>

    <?php
   //Muestra el carrito con los libros añadidos si no está vacío
   //Da posibilidad de:
   //- Ir al detalle del pago
   //- Vaciar el carrito
   //- Volver al listado de los libros para seguir comprando en todo caso
    if($_SESSION['carrito'][0][1]==0 && $_SESSION['carrito'][1][1]==0 && $_SESSION['carrito'][2][1]==0){
        echo "<p>El carrito está vacío</p>";
    }else{
        echo "<h1>Carrito de libros:</h1>";
        echo "<ul>";
        $cont=0;
        $total = 0;
        $comprar = true;
        foreach ($_SESSION['carrito'] as $producto){
        if($producto[1]>0){
            $subtotal = $producto[1]*$producto[0]->getPrecio();
            echo "<li>".$producto[1]." - ".$producto[0]->getTitulo()." - ".$producto[0]->getPrecio()."&euro; - Subtotal = ".$subtotal." euros</li>";
            $total = $total + $subtotal;
            if($producto[0]->getCantidad()<$producto[1]){
                echo "Se excede las existencias del libro";
                $comprar = false;
            }
        }
        $cont++;
    }
    echo "---- Total: ".$total;
    echo "</ul>";
    if($comprar){
        echo '<p><a href="pago_realizado.php">Comprar</a></p>';
    }else{
        echo '<p>Para puedes comprar más productos de los que disponemos</p>';
    }
   }   
   ?>    
   <p><a href="carrito_libro.php">Volver al carrito</a></p>

</body>

</html>