<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

try {
    // Crear conexión PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establecer el modo de error PDO en excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch(PDOException $e) {
    // En caso de error, mostrar el mensaje de error
    echo "Conexión fallida: " . $e->getMessage();
}
?>
