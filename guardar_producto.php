<?php
include("config.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$tipo = $_POST['tipo'];

$imagen = $_FILES['imagen']['name'];
$tmp = $_FILES['imagen']['tmp_name'];

move_uploaded_file($tmp, "uploads/".$imagen);

$conn->query("INSERT INTO productos (nombre, descripcion, precio, imagen, tipo)
VALUES ('$nombre','$descripcion','$precio','$imagen','$tipo')");

header("Location: dashboard.php");
?>