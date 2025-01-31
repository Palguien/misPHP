<?php
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class EquipoRepository extends \Doctrine\ORM\EntityRepository{

protected EntityManager $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    public function getPartido($id){
        
        //Consulta que devuelve una colección con los jugadores del equipo,
        //-1 si no encuentra el equipo.

        $consulta =$this -> entityManager->createQuery("select * from partido where id_partido=1;");
        //$consulta->setParameter('id', $id); //evitar injección
        $resultado = $consulta->getResult();

        if ($resultado == []){
            return -1;
        }else{
            return $resultado;
        }
    }
    

}
?>
