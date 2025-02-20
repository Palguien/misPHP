<?php
session_start();
//Pablo Pollos Iglesias
//Genera una Lista de libros (simulando una base de datos)
//Contiene la lógiga de negocio del manejo del carrito
require_once 'Libro.php';

$productos = [
    [new Libro("Retirar", -10),0],
    [new Libro("Agregar", 10),0],
];

if(!isset($_SESSION['carrito'])){
    $_SESSION['carrito']=$productos;
}

if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['agregar'])){
    $indice = $_POST['indice'];
    

    $_SESSION['carrito'][$indice][1]++;;
    header('Location: libros.php');
    exit;
}

?>
