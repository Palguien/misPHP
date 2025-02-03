<?php
// repositorios.php
require_once "bootstrap.php";
require_once './src/entity/Jugador.php';
require_once './src/entity/Equipo.php';
require_once './src/entity/Partido.php';
require_once './src/entity/PartidoRepository.php';
/*usar el repositorio*/

echo "-------Partidos de un equipo-------<br>";
// Partidos de un equipo
$partidos = $entityManager->getRepository('Partido')->getListaPartido("Raimon");

if($partidos === -1)
{
	echo "Equipo no encontrado<br>";
	}else
	{
		foreach($partidos as $partido)
		{
			echo $partido->getLocal()->getNombre(). "-". $partido->getVisitante()->getNombre(). "<br>";
			echo $partido->getGolesLocal(). "-". $partido->getGolesVisitante(). "<br>";
		}
}
echo "-------Partidos de un equipo como local-------<br>";
// Partidos de un equipo como local
$partidos = $entityManager->getRepository('Partido')->getListaPartidoLocal("Raimon");

if($partidos === -1)
{
	echo "Equipo no encontrado<br>";
	}else
	{
		foreach($partidos as $partido)
		{
			echo $partido->getLocal()->getNombre(). "-". $partido->getVisitante()->getNombre(). "<br>";
			echo $partido->getGolesLocal(). "-". $partido->getGolesVisitante(). "<br>";
		}
}
echo "-------Partidos de un equipo como visitante-------<br>";
// Partidos de un equipo como visitante
$partidos = $entityManager->getRepository('Partido')->getListaPartidoVisitante("Raimon");

if($partidos === -1)
{
	echo "Equipo no encontrado<br>";
	}else
	{
		foreach($partidos as $partido)
		{
			echo $partido->getLocal()->getNombre(). "-". $partido->getVisitante()->getNombre(). "<br>";
			echo $partido->getGolesLocal(). "-". $partido->getGolesVisitante(). "<br>";
		}
}
