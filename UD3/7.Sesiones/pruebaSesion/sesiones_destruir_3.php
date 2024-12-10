<?php
session_start();
session_destroy();
echo "Sesión destruida<br>";
print_r($_SESSION);
echo "<br><a href ='sesiones_crear_1.php'>Inicio</a>";
?>