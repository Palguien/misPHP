<?php
session_start();
if(!isset($_SESSION['count'])){
    $_SESSION['count']=0;
    $_SESSION['nombre']="Palguien";
    $_SESSION['id']=1;
}else{
    $_SESSION['count']++;
}
echo "hola ".$_SESSION['nombre']." en tu visita número ".$_SESSION['count'];
echo "<br><a href ='sesiones_mostrar_2.php'>Mostrar</a>";
echo "<br><a href ='sesiones_destruir_3.php'>Destruir sesión</a>";


?>