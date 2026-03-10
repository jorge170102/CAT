<?php
include("config.php");

$id = $_GET['id'];
$conn->query("DELETE FROM productos WHERE id=$id");

header("Location: dashboard.php");
?>