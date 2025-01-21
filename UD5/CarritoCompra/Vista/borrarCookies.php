<?php
    setcookie('carrito', '', time()-3600*24);
    header('Location: ../Vista/carrito.php');
