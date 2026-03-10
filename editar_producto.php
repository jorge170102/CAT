<?php
session_start();
include("config.php");

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM productos WHERE id=$id");
$producto = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Producto</title>

<script src="https://cdn.tailwindcss.com"></script>

<script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        primary: '#16a34a',
        secondary: '#0f766e'
      }
    }
  }
}
</script>

</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded-xl shadow w-full max-w-lg">

<h2 class="text-xl font-bold text-secondary mb-6">
Editar Producto
</h2>

<form action="actualizar_producto.php" method="POST" class="space-y-4">

<input type="hidden" name="id" value="<?= $producto['id'] ?>">

<input type="text" name="nombre" value="<?= $producto['nombre'] ?>"
class="w-full border px-4 py-2 rounded">

<textarea name="descripcion"
class="w-full border px-4 py-2 rounded"><?= $producto['descripcion'] ?></textarea>

<input type="number" step="0.01" name="precio"
value="<?= $producto['precio'] ?>"
class="w-full border px-4 py-2 rounded">

<select name="tipo" class="w-full border px-4 py-2 rounded">

<option value="venta" <?= $producto['tipo']=="venta" ? "selected":"" ?>>
Producto de venta
</option>

<option value="repuesto" <?= $producto['tipo']=="repuesto" ? "selected":"" ?>>
Repuesto
</option>

<option value="accesorio" <?= $producto['tipo']=="accesorio" ? "selected":"" ?>>
Accesorio
</option>

</select>

<button class="bg-primary text-white px-6 py-2 rounded hover:bg-secondary transition">
Actualizar Producto
</button>

</form>

</div>

</body>
</html>