<?php
require_once 'controlador_libro.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>
<body>
    <h1>Libros:</h1>
    <ul>
        <?php foreach ($productos as $indice => $producto){ ?>
            <li>
                <?= $producto[0] -> getTitular() ?> - <?= $producto[0]-> getSaldo() ?> euros - Existencias <?= $producto[0]-> getCantidad() ?>;
                <form action="controlador_libro.php" method="post">
                    <input type= "hidden" name="indice" value="<?= $indice ?>">
                    <input type= "submit" name="agregar" value="Agregar al carrito">
                </form>
            </li>
        <?php } ?>
    </ul>
    <p><a href="carrito_libro.php">Ver carrito</a></p>    

</body>
</html>
