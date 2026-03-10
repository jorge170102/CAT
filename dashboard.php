<?php
session_start();
include("config.php");

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

$result = $conn->query("SELECT * FROM productos ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Dashboard | CAT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

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

<body class="bg-gray-100">

<!-- HEADER -->
<div class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-secondary">
            Panel de Administración
        </h1>

        <div class="flex gap-4 items-center">
            <a href="productos.php" 
               class="text-sm text-gray-600 hover:text-primary transition">
               Ver Vitrina
            </a>

            <a href="logout.php"
               class="bg-red-500 text-white px-4 py-2 rounded-lg text-sm
                      hover:bg-red-600 transition">
               Cerrar sesión
            </a>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-6 py-10 grid md:grid-cols-3 gap-10">

    <!-- FORMULARIO -->
    <div class="md:col-span-1 bg-white rounded-xl shadow p-6 h-fit">

        <h2 class="text-lg font-semibold text-secondary mb-6">
            Agregar Producto
        </h2>

        <form action="guardar_producto.php" method="POST" enctype="multipart/form-data" class="space-y-4">

            <input type="text" name="nombre" placeholder="Nombre"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary"
                required>

            <textarea name="descripcion" placeholder="Descripción"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary"></textarea>

            <input type="number" step="0.01" name="precio" placeholder="Precio"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary"
                required>
                
            <select name="tipo" required
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                
                <option value="">Tipo de producto</option>
                <option value="venta">Producto de venta</option>
                <option value="repuesto">Repuesto</option>
                <option value="accesorio">Accesorio</option>
            
            </select>

            <input type="file" name="imagen"
                class="w-full text-sm">

            <button type="submit"
                class="w-full bg-primary text-white py-2 rounded-lg font-semibold
                       hover:bg-secondary transition">
                Guardar Producto
            </button>

        </form>
    </div>

    <!-- LISTA -->
    <div class="md:col-span-2 bg-white rounded-xl shadow p-6">

        <h2 class="text-lg font-semibold text-secondary mb-6">
            Productos Registrados
        </h2>

        <?php if($result->num_rows > 0): ?>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left border-collapse">

                <thead>
                    <tr class="border-b">
                        <th class="py-3">Nombre</th>
                        <th>Precio</th>
                        <th class="text-right">Acción</th>
                    </tr>
                </thead>

                <tbody>

                <?php while($row = $result->fetch_assoc()): ?>

                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="py-3 font-medium">
                        <?= $row['nombre']; ?>
                    </td>

                    <td class="text-primary font-semibold">
                        $<?= number_format($row['precio'],0,',','.'); ?>
                    </td>

                    <td class="text-right">
                        <a href="editar_producto.php?id=<?= $row['id']; ?>"
                            class="text-blue-500 hover:text-blue-700 mr-4">
                            Editar
                        </a>
                        <a href="eliminar_producto.php?id=<?= $row['id']; ?>"
                           class="text-red-500 hover:text-red-700 font-medium transition"
                           onclick="return confirm('¿Eliminar este producto?')">
                           Eliminar
                        </a>
                    </td>
                </tr>

                <?php endwhile; ?>

                </tbody>
            </table>
        </div>

        <?php else: ?>

        <p class="text-gray-500">No hay productos registrados.</p>

        <?php endif; ?>

    </div>

</div>

</body>
</html>