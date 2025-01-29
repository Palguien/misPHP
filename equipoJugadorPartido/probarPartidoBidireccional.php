<?php
require_once "bootstrap.php";
require_once './src/entity/EquipoBidireccional.php';
require_once './src/entity/PartidoBidireccional.php';
require_once './src/entity/JugadorBidireccional.php';


$id = $_GET['id'];
/*buscar el jugador con el id indicado*/
$equipo = $entityManager->find("EquipoBidireccional", $id);
if(!$equipo)
{
	echo "Equipo no encontrado";
}else{
	echo " ----Equipo ------------------<br>";
	echo "Nombre del equipo: ". $equipo->getNombre()."<br>";
	echo "Fundación del equipo: ".$equipo->getFundacion()."<br>";
	echo "Socios del equipo: ". $equipo->getSocios()."<br>";
	echo "Ciudad del equipo: ". $equipo->getCiudad()."<br>";
	$partidosLocal = $equipo->getPartidosLocal();
	echo "<br> ----Lista partidos como local ------------------";
	foreach($partidosLocal as $part){
		echo "<br> Visitante:";
		echo $part->getVisitante()->getNombre();
		echo "<br> Goles:";
		echo $part->getGolesLocal()." - ".$part->getGolesVisitante();
	}
	$partidosLocal = $equipo->getPartidosVisitante();
	echo "<br> ----Lista partidos como visitante ------------------";
	foreach($partidosLocal as $part){
		echo "<br> Local:";
		echo $part->getLocal()->getNombre();
		echo "<br> Goles:";
		echo $part->getGolesLocal()." - ".$part->getGolesVisitante();
		
	}
}
