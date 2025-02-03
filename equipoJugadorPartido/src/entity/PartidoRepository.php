<?php
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class PartidoRepository extends \Doctrine\ORM\EntityRepository{

protected EntityManager $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    public function getListaPartido($nombre_equipo){
        
        //Consulta que devuelve una colección con los partidos jugados por el equipo,
        //-1 si no encuentra el partido.
        $consulta =$this -> entityManager->createQuery("SELECT p FROM Partido p JOIN Equipo e WHERE e.nombre = :equipo AND (p.local = e.idEquipo or p.visitante = e.idEquipo)");
        $consulta->setParameter('equipo', $nombre_equipo); //evitar injección
        $resultado = $consulta->getResult();

        if ($resultado == []){
            return -1;
        }else{
            return $resultado;
        }
    }

    public function getListaPartidoVisitante($nombre_equipo){
        
        //Consulta que devuelve una colección con los partidos jugados por el equipo,
        //-1 si no encuentra el partido.
        $consulta =$this -> entityManager->createQuery("SELECT p FROM Partido p JOIN Equipo e WHERE e.nombre = :equipo AND p.visitante = e.idEquipo");
        $consulta->setParameter('equipo', $nombre_equipo); //evitar injección
        $resultado = $consulta->getResult();

        if ($resultado == []){
            return -1;
        }else{
            return $resultado;
        }
    }

    public function getListaPartidoLocal($nombre_equipo){
        
        //Consulta que devuelve una colección con los partidos jugados por el equipo,
        //-1 si no encuentra el partido.
        $consulta =$this -> entityManager->createQuery("SELECT p FROM Partido p JOIN Equipo e WHERE e.nombre = :equipo AND p.local = e.idEquipo");
        $consulta->setParameter('equipo', $nombre_equipo); //evitar injección
        $resultado = $consulta->getResult();

        if ($resultado == []){
            return -1;
        }else{
            return $resultado;
        }
    }


    public function getLista($nombre_equipo){
        
        //Consulta que devuelve una colección con los jugadores del equipo,
        //-1 si no encuentra el equipo.

        $consulta =$this -> entityManager->createQuery("SELECT j FROM Jugador j JOIN Equipo e WHERE e.nombre = :equipo and j.equipo = p.idEquipo");
        $consulta->setParameter('equipo', $nombre_equipo); //evitar injección
        $resultado = $consulta->getResult();

        if ($resultado == []){
            return -1;
        }else{
            return $resultado;
        }
    }
    

}
?>
