<?php
include("config.php");

/* consultas por tipo */
$venta = $conn->query("SELECT * FROM productos WHERE tipo='venta' ORDER BY id DESC");
$repuestos = $conn->query("SELECT * FROM productos WHERE tipo='repuesto' ORDER BY id DESC");
$accesorios = $conn->query("SELECT * FROM productos WHERE tipo='accesorio' ORDER BY id DESC");

function mostrarProductos($result){
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
?>

<div class="bg-white rounded-xl shadow hover:shadow-lg transition duration-300 border flex flex-col">

    <!-- CONTENEDOR IMAGEN -->
    <div class="h-48 bg-gray-50 flex items-center justify-center overflow-hidden">
        <img src="uploads/<?= $row['imagen']; ?>" 
        class="h-full w-full object-contain p-3">
    </div>

    <!-- CONTENIDO -->
    <div class="p-4 flex flex-col flex-grow">

        <h2 class="text-md font-semibold text-secondary text-center mb-2">
            <?= $row['nombre']; ?>
        </h2>

        <p class="text-gray-500 text-sm text-center mb-3 line-clamp-2 flex-grow">
            <?= $row['descripcion']; ?>
        </p>

        <div class="text-center mt-auto">
            <span class="text-lg font-bold text-primary">
                $<?= number_format($row['precio'],0,',','.'); ?>
            </span>
        </div>

    </div>

</div>

<?php
        }
    }else{
        echo '<p class="text-gray-500">No hay productos en esta categoría.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Productos | Centro de Asistencia Técnica</title>
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

<body class="bg-gray-50">

<!-- HEADER -->
<div class="bg-gradient-to-r from-primary to-secondary text-white py-8">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center">

        <div>
            <h1 class="text-2xl md:text-3xl font-bold">
                Productos Disponibles
            </h1>
            <p class="text-white/80 text-sm mt-1">
                Vitrina de productos en tienda
            </p>
        </div>

        <a href="index.php"
           class="mt-4 md:mt-0 bg-white text-primary px-5 py-2 rounded-lg font-semibold
                  hover:scale-105 hover:shadow-lg transition duration-300">
           ← Volver al Inicio
        </a>

    </div>
</div>

<div class="max-w-7xl mx-auto px-6 py-16 space-y-20">

<!-- PRODUCTOS DE VENTA -->
<section>

<h2 class="text-2xl font-bold text-secondary mb-8 border-b pb-2">
Productos de Venta
</h2>

<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">

<?php mostrarProductos($venta); ?>

</div>

</section>


<!-- REPUESTOS -->
<section>

<h2 class="text-2xl font-bold text-secondary mb-8 border-b pb-2">
Repuestos
</h2>

<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">

<?php mostrarProductos($repuestos); ?>

</div>

</section>


<!-- ACCESORIOS -->
<section>

<h2 class="text-2xl font-bold text-secondary mb-8 border-b pb-2">
Accesorios
</h2>

<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">

<?php mostrarProductos($accesorios); ?>

</div>

</section>

</div>

</body>
</html>