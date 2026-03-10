<!DOCTYPE html>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Centro de Asistencia Técnica</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Tailwind primero -->
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

  <!-- CSS Personalizado siempre al final -->
  <link rel="stylesheet" href="/css/styles.css?v=2">
</head>


<body class="bg-gray-50 text-gray-800 scroll-smooth">

<!-- NAVBAR -->
<nav class="fixed top-0 w-full bg-white shadow z-50">
  <div class="max-w-7xl mx-auto px-6 py-2 flex justify-between items-center">

<!-- LOGO -->
    <img src="/img/logos/cat.webp" class="h-24 md:h-32 w-auto" alt="CAT">





    <!-- BOTÓN MÓVIL -->
    <button id="menuBtn" class="md:hidden text-3xl">
      ☰
    </button>

    <!-- MENÚ DESKTOP -->
    <div class="hidden md:flex gap-6 font-medium items-center">
      <a href="#inicio" class="hover:text-primary">Inicio</a>
      <a href="#historia" class="hover:text-primary">Historia</a>
      <a href="#servicios" class="hover:text-primary">Servicios</a>
      <a href="#marcas" class="hover:text-primary">Marcas</a>
      <a href="#ubicacion" class="hover:text-primary">Ubicación</a>
      <a href="productos.php" class="hover:text-primary">Productos</a>

    </div>
  </div>

  <!-- MENÚ MÓVIL -->
  <div id="mobileMenu" class="hidden md:hidden bg-white border-t">
    <a href="#inicio" class="block px-6 py-3 border-b">Inicio</a>
    <a href="#historia" class="block px-6 py-3 border-b">Historia</a>
    <a href="#servicios" class="block px-6 py-3 border-b">Servicios</a>
    <a href="#marcas" class="block px-6 py-3 border-b">Marcas</a>
    <a href="#ubicacion" class="block px-6 py-3 border-b">Ubicación</a>
    <a href="productos.php" class="block px-6 py-3 text-primary font-semibold">Productos</a>
  </div>
</nav>

<div class="h-20"></div>

<!-- HERO -->
<section id="inicio" class="bg-gradient-to-r from-primary to-secondary text-white">
  <div class="max-w-7xl mx-auto px-6 py-20 text-center">
    <h1 class="text-3xl md:text-5xl font-bold mb-6">
      Centro de Asistencia Técnica
    </h1>
    <p class="text-base md:text-xl mb-8 max-w-3xl mx-auto text-white/90">
      Servicio técnico especializado en electrónica, línea blanca, computación, venta de repuestos y accesorios, con más de 20 años de experiencia y trayectoria en el rubro.
    </p>
    <a href="#contacto"
       class="inline-flex items-center gap-2
              bg-white text-primary
              px-8 py-3 rounded-2xl font-bold
              shadow-lg hover:shadow-2xl
              transition transform duration-300
              hover:-translate-y-1 hover:scale-105">
      Contáctanos 
    </a>

  </div>
</section>

<?php include 'sections/historia.php'; ?>
<?php include 'sections/servicios.php'; ?>
<?php include 'sections/marcas.php'; ?>
<?php include 'sections/ubicacion.php'; ?>
<?php include 'sections/contacto.php'; ?>

<footer class="bg-gray-900 text-white py-10 text-center">
  <p class="text-sm opacity-80">
    © <?= date('Y') ?> Centro de Asistencia Técnica
  </p>
</footer>

<script src="js/main.js"></script>
</body>
</html>



