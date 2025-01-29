<?php
  require_once "bootstrap.php";
  require_once './src/entity/Equipo.php';
  require_once './src/entity/Jugador.php';
  $id = $_POST['id'];
  /*buscar el jugador con el id indicado*/
  $jugador = $entityManager->find("Jugador", $id);
  if(!$jugador){
  echo "Jugador no encontrado";
  }else{
	echo "Nombre del jugador: ". $jugador->getNombre()."<br>";
  echo "Apellidos del jugador: ". $jugador->getApellidos()."<br>";
  echo "Edad del jugador: ". $jugador->getEdad()."<br>";
	$equipo = $jugador->getEquipo();
  echo " ----Equipo ------------------<br>";
	echo "Nombre del equipo: ". $equipo->getNombre()."<br>";
  echo "Fundación del equipo: ". $equipo->getFundacion()."<br>";
  echo "Socios del equipo: ". $equipo->getSocios()."<br>";
  echo "Ciudad del equipo: ". $equipo->getCiudad()."<br>";
  }
