<?php
require_once 'Libro.php';
require_once 'controlador_libro.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <title>Estado de Cuenta</title>
</head>

<body>
   <h1>Estado de Cuenta</h1>
   <?php
   if(!isset($_SESSION['cuenta'])){
      $_SESSION['cuenta']=["Pablo",2000];
   }
   //Pablo Pollos Iglesias
   echo "<h1>Titular:".$_SESSION['cuenta'][0]."</h1>";
   echo "<h2>Saldo:".$_SESSION['cuenta'][1]."</h2>";
   if($_SESSION['cuenta'][1]>0){
      echo "<h3>Saldo positivo</h3>";
   }else{
      echo "<h3>Saldo negativo</h3>";
   }
   if($_SESSION['carrito'][0][1]==0 && $_SESSION['carrito'][1][1]==0){
      echo "<p>El carrito está vacío</p>";
   }else{
      

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