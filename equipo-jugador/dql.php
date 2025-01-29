<?php 
    require_once "bootstrap.php";
    require_once './src/entity/Equipo.php';
    require_once './src/entity/Jugador.php';

    //SELECT j FROM jugador j;
    //SELECT j.nombre FROM jugador j WHERE j.edad>30;
    //SELECT COUNT(j.id_jugador) FROM jugador j WHERE j.edad>30;
    //SELECT j FROM jugador j ORDER BY j.edad ASC;

    echo "--Nombres de los equipos con más de 1000 socios ordenado por año de fundación--<br>";
    //$consulta =$entityManager->createQuery("SELECT j FROM jugador j");
    $socios = 1000;
    $consulta =$entityManager->createQuery("SELECT e FROM Equipo e WHERE e.socios > :socios ORDER BY e.fundacion");
    $consulta->setParameter('socios', $socios); //evitar injección
    $resultado = $consulta->getResult();

    //$consulta->getSingleScalarResult();   //resultado único
    foreach ($resultado as $equipo) { //resultado múltiple
        echo $equipo->getNombre()."<br>";
    }

    echo "--DQL que devuelva los nombres de los jugadores de equipos de Madrid--<br>";
    //$consulta =$entityManager->createQuery("SELECT j FROM jugador j");
    $consulta =$entityManager->createQuery("SELECT j.nombre as jugador, e.nombre as equipo FROM Jugador j JOIN j.equipo e WHERE e.ciudad = 'Madrid'");
    $resultado = $consulta->getResult();

    //$consulta->getSingleScalarResult();   //resultado único
    foreach ($resultado as $jugador) { //resultado múltiple
        echo $jugador["jugador"]." - ".$jugador["equipo"]."<br>";
    }
    echo "----------<br>";
    //--Actualizar--
    $edad = 20;
    $consulta =$entityManager->createQuery("UPDATE jugador j SET j.edad=j.edad+1 WHERE j.edad>:edad");
    $consulta->setParameter('edad', $edad); //evitar injección
    $resultado = $consulta->getResult();
    //--Borrar--
    $edad = 30;
    $consulta =$entityManager->createQuery("DELETE jugador j WHERE j.edad>:edad");
    $consulta->setParameter('edad', $edad); //evitar injección
    $resultado = $consulta->getResult();
?>