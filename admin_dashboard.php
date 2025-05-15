<?php
// admin_dashboard.php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['rol'] !== 'administrador') {
    header('Location: login.php');
    exit;
}

$pdo = getDBConnection();

// Consultas para obtener datos
//$stmt_usuarios = $pdo->query("SELECT id, nombre, email, rol FROM usuarios");
//$usuarios = $stmt_usuarios->fetchAll(PDO::FETCH_ASSOC);

//$stmt_recolecciones = $pdo->query("SELECT r.id_recoleccion, r.id_usuario, u.nombre, r.facha, r.kilogram FROM recolecciones r JOIN usuarios u ON r.id_usuario = u.id");
//$recolecciones = $stmt_recolecciones->fetchAll(PDO::FETCH_ASSOC);

//$stmt_pagos = $pdo->query("SELECT p.id_pago, p.id_usuario, u.nombre, p.facha_inicio, p.facha_fin, p.total_pago, p.estado_pago FROM pagos p JOIN usuarios u ON p.id_usuario = u.id");
//$pagos = $stmt_pagos->fetchAll(PDO::FETCH_ASSOC);

//$stmt_detalle_pago = $pdo->query("SELECT dp.id_detalle, dp.id_pago, p.facha_inicio, dp.facha, dp.cantidad FROM detalle_pago dp JOIN pagos p ON dp.id_pago = p.id_pago");
//$detalle_pagos = $stmt_detalle_pago->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración - CoffeeDigit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            width: 270px;
            background: linear-gradient(180deg,rgb(4, 144, 13) 0%,rgb(2, 137, 7) 100%);
            color: white;
            padding: 1.5rem;
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.2);
            transition: width 0.3s ease;
        }
        .sidebar:hover {
            width: 280px;
        }
        .sidebar .logo {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
            text-align: center;
            color: #ffffff;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        .sidebar ul li {
            margin-bottom: 1rem;
        }
        .sidebar ul li a {
            display: flex;
            align-items: center;
            padding: 0.75rem;
            color: #e5e7eb;
            border-radius: 8px;
            transition: background 0.3s ease, transform 0.2s ease;
        }
        .sidebar ul li a:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        }
        .sidebar ul li a i {
            margin-right: 0.75rem;
            font-size: 1.2rem;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
        }
        .table-auto {
            width: 100%;
            border-collapse: collapse;
        }
        .table-auto th, .table-auto td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .table-auto th {
            background-color: #f9fafb;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Sidebar Moderno -->
    <div class="sidebar">
        <div class="logo">CoffeeDigit</div>
        <ul class="space-y-2">
            <li>
                <a href="#usuarios">
                    <i class="fas fa-users"></i> Gestión de Usuarios
                </a>
            </li>
            <li>
                <a href="#recolecciones">
                    <i class="fas fa-leaf"></i> Recolecciones
                </a>
            </li>
            <li>
                <a href="#pagos">
                    <i class="fas fa-wallet"></i> Pagos
                </a>
            </li>
            <li>
                <a href="#detalle-pagos">
                    <i class="fas fa-file-invoice-dollar"></i> Detalle de Pagos
                </a>
            </li>
            <li>
                <a href="logout.php" class="bg-red-500 hover:bg-red-600">
                    <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                </a>
            </li>
        </ul>
    </div>

    <!-- Contenido principal -->
    <div class="content">
        <h1 class="text-3xl font-bold mb-6">Panel de Administración</h1>
        <p class="mb-4">Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre']); ?>!</p>

        <!-- Gestión de Usuarios -->
        <section id="usuarios" class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Gestión de Usuarios</h2>
            <table class="table-auto">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($usuario['id']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['rol']); ?></td>
                            <td>
                                <a href="?editar=<?php echo $usuario['id']; ?>" class="text-blue-500 hover:underline">Editar</a> |
                                <a href="?eliminar=<?php echo $usuario['id']; ?>" class="text-red-500 hover:underline" onclick="return confirm('¿Seguro que deseas eliminar?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="?nuevo_usuario=1" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Agregar Usuario</a>
        </section>

        <!-- Gestión de Recolecciones -->
        <section id="recolecciones" class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Recolecciones</h2>
            <table class="table-auto">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Fecha</th>
                        <th>Kilogramos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($recolecciones as $recoleccion): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($recoleccion['id_recoleccion']); ?></td>
                            <td><?php echo htmlspecialchars($recoleccion['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($recoleccion['facha']); ?></td>
                            <td><?php echo htmlspecialchars($recoleccion['kilogram']); ?></td>
                            <td>
                                <a href="?editar_recoleccion=<?php echo $recoleccion['id_recoleccion']; ?>" class="text-blue-500 hover:underline">Editar</a> |
                                <a href="?eliminar_recoleccion=<?php echo $recoleccion['id_recoleccion']; ?>" class="text-red-500 hover:underline" onclick="return confirm('¿Seguro que deseas eliminar?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="?nueva_recoleccion=1" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Agregar Recolección</a>
        </section>

        <!-- Gestión de Pagos -->
        <section id="pagos" class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Pagos</h2>
            <table class="table-auto">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pagos as $pago): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($pago['id_pago']); ?></td>
                            <td><?php echo htmlspecialchars($pago['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($pago['facha_inicio']); ?></td>
                            <td><?php echo htmlspecialchars($pago['facha_fin']); ?></td>
                            <td><?php echo htmlspecialchars($pago['total_pago']); ?></td>
                            <td><?php echo htmlspecialchars($pago['estado_pago']); ?></td>
                            <td>
                                <a href="?editar_pago=<?php echo $pago['id_pago']; ?>" class="text-blue-500 hover:underline">Editar</a> |
                                <a href="?eliminar_pago=<?php echo $pago['id_pago']; ?>" class="text-red-500 hover:underline" onclick="return confirm('¿Seguro que deseas eliminar?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="?nuevo_pago=1" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Agregar Pago</a>
        </section>

        <!-- Gestión de Detalle de Pagos -->
        <section id="detalle-pagos">
            <h2 class="text-2xl font-semibold mb-4">Detalle de Pagos</h2>
            <table class="table-auto">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Pago</th>
                        <th>Fecha Pago</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($detalle_pagos as $detalle): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($detalle['id_detalle']); ?></td>
                            <td><?php echo htmlspecialchars($detalle['id_pago']); ?></td>
                            <td><?php echo htmlspecialchars($detalle['facha']); ?></td>
                            <td><?php echo htmlspecialchars($detalle['cantidad']); ?></td>
                            <td>
                                <a href="?editar_detalle=<?php echo $detalle['id_detalle']; ?>" class="text-blue-500 hover:underline">Editar</a> |
                                <a href="?eliminar_detalle=<?php echo $detalle['id_detalle']; ?>" class="text-red-500 hover:underline" onclick="return confirm('¿Seguro que deseas eliminar?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="?nuevo_detalle=1" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Agregar Detalle</a>
        </section>
    </div>
</body>
</html>