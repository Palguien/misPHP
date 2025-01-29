<?php
require_once "bootstrap.php";
require_once 'src/entity/Equipo.php';

$nombre = $_POST['nombre'];
$socios = $_POST['socios'];
$ciudad = $_POST['ciudad'];
$fundacion = $_POST['fundacion'];

$nuevo = new Equipo();
$nuevo->setNombre($nombre);
$nuevo->setFundacion($fundacion);
$nuevo->setSocios($socios);
$nuevo->setCiudad($ciudad);
$entityManager->persist($nuevo);
$entityManager->flush();
echo "Equipo insertado " . $nuevo->getIdEquipo() . "\n";


