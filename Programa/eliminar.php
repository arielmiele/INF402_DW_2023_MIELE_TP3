<?php
include 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    if (eliminarProducto($id)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error al eliminar el producto.";
    }
}
?>
