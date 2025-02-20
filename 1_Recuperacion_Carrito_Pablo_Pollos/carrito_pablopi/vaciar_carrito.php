<?php
require_once 'Cuenta.php';
require_once 'controlador_libro.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaciar el carrito</title>
</head>
<body>
    <h1>Vaciar el carrito</h1>
    <?php    
    if(isset($_GET["index"])){
        $id = $_GET["index"];
        $_SESSION['carrito'][$id][1] = 0;
    }else{
        $id = $_GET["modo"];
        $_SESSION['carrito'][$id][1]--;
    }
    header('Location: carrito_libro.php');
    ?>    
</body>
</html>