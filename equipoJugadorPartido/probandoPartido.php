<?php
// ejemplo_basicos.php
require_once "bootstrap.php";
require_once 'src/entity/Partido.php';
require_once 'src/entity/Equipo.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];

	// buscar por clave primaria
	$part = $entityManager->find("Partido", $id);
	if(!$part){
		echo "<br>Partido no encontrado";
	}
	// mostrar datos
	echo "<br> id:";
	echo $part->getIdPartido();
	echo "<br> Local:";
	echo $part->getLocal()->getNombre();
	echo "<br> Visitante:";
	echo $part->getVisitante()->getNombre();
	echo "<br> Goles:";
	echo $part->getGolesLocal()." - ".$part->getGolesVisitante();
	echo "<br>";
	
}else{
	echo "Modifica la url<br>'exampleurl.php?id=X'";
}
