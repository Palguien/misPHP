<?php
include_once("503EmpleadoConstructor.php");
//creamos un objeto
$lolo = new Empleado("lolo","García",1200);
$paco = new Empleado("Paco","Smith");

echo $lolo->getSueldo();
echo "<br>";
echo $paco->getSueldo();
echo "<br>";



?>