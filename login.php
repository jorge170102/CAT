<?php
session_start();

include("config.php");

$error = "";

if($_POST){
    $usuario = $_POST['usuario'];
    $password = md5($_POST['password']);

    $query = $conn->query("SELECT * FROM admin WHERE usuario='$usuario' AND password='$password'");

    if($query->num_rows > 0){
        $_SESSION['admin'] = $usuario;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Credenciales incorrectas";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login | Panel CAT</title>
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

<body class="min-h-screen bg-gray-100 flex items-center justify-center">

<div class="bg-white shadow-xl rounded-2xl w-full max-w-md p-8">

    <!-- T«¿tulo -->
    <div class="text-center mb-8">
        <h1 class="text-2xl font-bold text-secondary">
            Panel de Administracion
        </h1>
        <p class="text-gray-500 text-sm mt-2">
            Centro de Asistencia Tecnica
        </p>
    </div>

    <!-- Error -->
    <?php if($error): ?>
        <div class="bg-red-100 text-red-600 text-sm p-3 rounded-lg mb-4 text-center">
            <?= $error; ?>
        </div>
    <?php endif; ?>

    <!-- Formulario -->
    <form method="POST" class="space-y-5">

        <div>
            <label class="block text-sm text-gray-600 mb-1">Usuario</label>
            <input type="text" name="usuario" required
                class="w-full border border-gray-300 rounded-lg px-4 py-2 
                       focus:outline-none focus:ring-2 focus:ring-primary">
        </div>

        <div>
            <label class="block text-sm text-gray-600 mb-1">Contrase&ntilde;a</label>
            <input type="password" name="password" required
                class="w-full border border-gray-300 rounded-lg px-4 py-2 
                       focus:outline-none focus:ring-2 focus:ring-primary">
        </div>

        <button type="submit"
            class="w-full bg-primary text-white py-2 rounded-lg font-semibold
                   hover:bg-secondary transition duration-300">
            Ingresar
        </button>

    </form>

    <!-- Volver -->
    <div class="text-center mt-6">
        <a href="index.php" class="text-sm text-gray-500 hover:text-primary transition">
            ¢« Volver al sitio web
        </a>
    </div>

</div>

</body>
</html>