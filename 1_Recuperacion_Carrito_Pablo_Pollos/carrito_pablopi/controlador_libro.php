<?php
session_start();

require_once 'Cuenta.php';

$productos = [
    [new Cuenta("Pablo", 10,5),0],
    [new Cuenta("El Quijote", 5,3),0],
    [new Cuenta("Bilbo", 3,3),0],
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
