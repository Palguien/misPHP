<?php
require_once "bootstrap.php";
require_once './src/entity/EquipoBidireccional.php';
require_once './src/entity/JugadorBidireccional.php';



$id = $_POST['id'];
/*buscar el jugador con el id indicado*/
$equipo = $entityManager->find("EquipoBidireccional", $id);
if(!$equipo)
{
	echo "Equipo no encontrado";
}else{
	echo " ----Equipo ------------------<br>";
	echo "Nombre del equipo: ". $equipo->getNombre()."<br>";
	echo "Fundación del equipo: ". $equipo->getFundacion()."<br>";
	echo "Socios del equipo: ". $equipo->getSocios()."<br>";
	echo "Ciudad del equipo: ". $equipo->getCiudad()."<br>";
	$jugadores = $equipo->getJugadores();
	echo " ----Lista jugadores ------------------<br>";
	foreach($jugadores as $jugador){
		echo "Nombre del jugador: ". $jugador->getNombre()."<br>";
		echo "Apellidos del jugador: ". $jugador->getApellidos()."<br>";
		echo "Edad del jugador: ". $jugador->getEdad()."<br>";
		echo " ----------------------<br>";
		$equipo = $jugador->getEquipo();
		
	}
}
