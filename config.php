<?php
// config.php
define('DB_HOST', '127.0.0.1');
define('DB_PORT', '3320');
define('DB_NAME', 'coffedigit');
define('DB_USER', 'root'); // Ajusta según tu configuración de Laragon
define('DB_PASS', ''); // Ajusta según tu configuración de Laragon

function getDBConnection() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=utf8";
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
}
?>
