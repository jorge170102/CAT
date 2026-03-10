<?php
session_start();
include("config.php");

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$tipo = $_POST['tipo'];

$conn->query("UPDATE productos 
SET nombre='$nombre',
descripcion='$descripcion',
precio='$precio',
tipo='$tipo'
WHERE id=$id");

header("Location: dashboard.php");
?>