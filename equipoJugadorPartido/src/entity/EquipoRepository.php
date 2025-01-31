<?php
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class EquipoRepository extends \Doctrine\ORM\EntityRepository{

protected EntityManager $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    public function getLista($nombre_equipo){
        
        //Consulta que devuelve una colección con los jugadores del equipo,
        //-1 si no encuentra el equipo.

        $consulta =$this -> entityManager->createQuery("SELECT j FROM Jugador j JOIN Equipo e WHERE e.nombre = :equipo");
        $consulta->setParameter('equipo', $nombre_equipo); //evitar injección
        $resultado = $consulta->getResult();

        if ($resultado == []){
            return -1;
        }else{
            return $resultado;
        }
    }

    public function getEquiposMasXSocios($socios){
        
        //Consulta que devuelve una colección con los jugadores del equipo,
        //-1 si no encuentra el equipo.
        //echo "--Nombres de los equipos con más de 1000 socios ordenado por año de fundación--<br>";
        //$consulta =$entityManager->createQuery("SELECT j FROM jugador j");
        $consulta =$this -> entityManager->createQuery("SELECT e FROM Equipo e WHERE e.socios > :socios ORDER BY e.fundacion");
        $consulta->setParameter('socios', $socios); //evitar injección
        $resultado = $consulta->getResult();

        if ($resultado == []){
            return -1;
        }else{
            return $resultado;
        }
    }

    public function getJugadoresCiudad($ciudad){
        
        //Consulta que devuelve una colección con los jugadores de equipos de una ciudad concreta,

        $consulta = $this -> entityManager->createQuery("SELECT j FROM Jugador j JOIN Equipo e WHERE e.ciudad = :ciudad");
        $consulta->setParameter('ciudad', $ciudad); //evitar injección
        $resultado = $consulta->getResult();

        if ($resultado == []){
            return -1;
        }else{
            return $resultado;
        }
    }

    

}
?>