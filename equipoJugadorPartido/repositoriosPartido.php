<?php
// repositorios.php
require_once "bootstrap.php";
require_once './src/entity/Jugador.php';
require_once './src/entity/Equipo.php';
require_once './src/entity/Partido.php';
require_once './src/entity/PartidoRepository.php';
/*usar el repositorio*/

// Jugadores de un equipo
$partidos = $entityManager->getRepository('Partido')->getPartido(2);

if($partidos === -1)
{
	echo "Partido no encontrado<br>";
	}else
	{
		foreach($partidos as $partido)
		{
			echo $partido->getGolesLocal(). " ". $partido->getGolesVisitante(). "<br>";
		}
}
