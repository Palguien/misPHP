<?php
// ejemplo_basicos.php
require_once "bootstrap.php";
require_once 'src/entity/Equipo.php';
// buscar por clave primaria
$eq = $entityManager->find("Equipo", 2);
// mostrar datos
echo $eq->getSocios();
// cambiar el número de socios
$eq->setSocios(70000);
$entityManager->flush();
// si el equipo no existe devuelve null
$eq = $entityManager->find("Equipo", 4);
if(!$eq){
	echo "Equipo no encontrado";
}