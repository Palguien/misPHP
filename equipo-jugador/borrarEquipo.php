<?php
require_once "bootstrap.php";
require_once 'src/entity/Equipo.php';
$id = $_POST['id'];
/*buscar el jugador con el id indicado*/
$equipo = $entityManager->find("Equipo", $id);
if(!$equipo){
	echo "Equipo no encontrado";
}else{
	$entityManager->remove($equipo);
	$entityManager->flush();
	echo "Equipo borrado";
}


