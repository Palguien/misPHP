<?php
//arga tu fichero project bootstrap
require_once 'bootstrap.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;

//obtiene el EntityManager que se lo pasa a la consola
//podríamos crear una función en bootstrap y llamarla aquí
//$entityManager = GetEntityManager();
// o directamente usar los datos definidos en bootstrap

return ConsoleRunner::createHelperSet($entityManager);