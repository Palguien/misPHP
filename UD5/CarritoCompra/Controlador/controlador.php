<?php
session_start();

require_once '../Modelo/Producto.php';

$productos = [
    new Producto("Champú", 10),
    new Producto("Jabón", 5),
    new Producto("Pasta de dientes", 3),
];

if(!isset($_SESSION['carrito'])){
    $_SESSION['carrito']=[];
}

if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['agregar'])){
    $indice = $_POST['indice'];

    $_SESSION['carrito'][] = $productos[$indice];
    header('Location: ../Vista/productos.php');
    exit;
}