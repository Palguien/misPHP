<?php
include_once("Persona.php");
//creamos un objeto
$lolo = new Persona();

$lolo->setNombre("Lolo");
$lolo->setApellido("García");

$lolo->imprimirNombreCompleto();
?>