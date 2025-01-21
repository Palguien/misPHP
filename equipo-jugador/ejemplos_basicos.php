<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];

	// ejemplo_basicos.php
	require_once "bootstrap.php";
	require_once 'src/entity/Equipo.php';
	// buscar por clave primaria
	$eq = $entityManager->find("Equipo", $id);
	if(!$eq){
		echo "<br>Equipo no encontrado";
	}
	// mostrar datos
	echo "<br> id:";
	echo $eq->getIdEquipo();
	echo "<br> Nombre:";
	echo $eq->getNombre();
	echo "<br> Socios:";
	echo $eq->getSocios();
	echo "<br> Fundacion:";
	echo $eq->getFundacion();
	echo "<br> Ciudad:";
	echo $eq->getCiudad();
	;echo "<br> Estadio:";
	echo $eq->getEstadio();
	echo "<br>";
	
}else{
	echo "Modifica la url<br>'exampleurl.php?id=X'";
}
