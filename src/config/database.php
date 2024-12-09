<?php
function connectDB() {
    $host = '127.0.0.1';  // Cambia a tu dirección de host si es necesario
    $port = '3310';       // Puerto de MySQL
    $dbName = 'mascotas_perdidas'; // Cambia esto por el nombre de tu base de datos
    $username = 'root';   // Tu usuario de MySQL
    $password = '080322'; // Cambia esto por tu contraseña de MySQL

    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbName;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
}
