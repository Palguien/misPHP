<?php
// repositorios.php
require_once "bootstrap.php";
require_once './src/entity/Jugador.php';
require_once './src/entity/Equipo.php';
require_once './src/entity/EquipoRepository.php';
/*usar el repositorio*/

// Jugadores de un equipo
$jugadores = $entityManager->getRepository('Equipo')->getLista("Raimon");

if($jugadores === -1)
{
	echo "Equipo no encontrado<br>";
	}else
	{
		foreach($jugadores as $jugador)
		{
			echo "Nombre: ". $jugador->getNombre(). " ". $jugador->getApellidos(). "<br>";
		}
}
	// Jugadores de ciudad
	echo "---------------------<br>";
	$jugadores = $entityManager->getRepository('Equipo')->getJugadoresCiudad("Inazuma");


	if($jugadores === -1)
	{
		echo "Equipo no encontrado<br>";
	}
	else{
		foreach($jugadores as $jugador)
		{
			echo "Nombre: ". $jugador->getNombre(). " ". $jugador->getApellidos(). "<br>";
		}
	}
	// Equipos con más de x socios
	echo "---------------------<br>";
	$jugadores = $entityManager->getRepository('Equipo')->getEquiposMasXSocios(25000);


	if($jugadores === -1)
	{
		echo "Equipo no encontrado<br>";
	}
	else{
		foreach($jugadores as $equipo)
		{
			echo "Nombre: ". $equipo->getNombre(). "<br>";
		}
	}
