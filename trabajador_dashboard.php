<?php
// trabajador_dashboard.php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['rol'] !== 'trabajador') {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Trabajador - CoffeeDigit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Panel de Trabajador</h1>
        <p>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre']); ?>!</p>
        <p>Este es el panel de control para trabajadores.</p>
        <a href="logout.php" class="mt-4 inline-block bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600">
            Cerrar Sesión
        </a>
    </div>
</body>
</html>