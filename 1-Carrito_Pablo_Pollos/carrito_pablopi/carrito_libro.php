<?php
require_once 'Libro.php';
require_once 'controlador_libro.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <title>Carrito de libros</title>
</head>

<body>
   <h1>Carrito de Libros</h1>
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
      foreach ($_SESSION['carrito'] as $producto){
         if($producto[1]>0){
            echo "<li>".$producto[1]." - ".$producto[0]->getTitulo()." - ".$producto[0]->getPrecio()."&euro; - ";
            echo '<a href="vaciar_carrito.php?modo='.$cont.'">Eliminar 1</a> - ';
            echo '<a href="vaciar_carrito.php?index='.$cont.'">Eliminar todos</a></li>';
         }
         $cont++;
      }
      echo "</ul>";
      echo '<p><a href="detalle_pago_libro.php">Comprar</a></p>';
   }   
   ?>    
   <p><a href="libros.php">Volver a la lista de productos</a></p>
   

</body>

</html>