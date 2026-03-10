<?php
$host = "localhost";
$user = "cce13860_cat_admin";
$pass = "irok.pulse6";
$db   = "cce13860_cat_productos";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>