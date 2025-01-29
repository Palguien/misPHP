<?php
require_once "bootstrap.php";
require_once './src/entity/Equipo.php';

$ciudad = $_POST['ciudad'];
/*Con findBy/findOneBy:
- Jugadores con exactamente XX años..*/
echo "Equipos de ".$ciudad."<br>";
$equipos = $entityManager->getRepository('Equipo')->findBy(array('ciudad' => $ciudad));

foreach($equipos as $equipo)
{
	echo "Nombre: ". $equipo->getNombre()."<br>";

}