<?php
include 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];
    $fecha = $_POST['fecha'];

    if (agregarProducto($nombre, $descripcion, $precio, $cantidad, $categoria, $fecha)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error al agregar el producto.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Agregar Producto</h2>
        <form method="post" action="agregar.php">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad en Stock:</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <input type="text" class="form-control" id="categoria" name="categoria" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha de Ingreso:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Agregar</button>
            <!-- Botón para volver a la página de inicio -->
            <br>
            <a href="index.php" class="btn btn-secondary mt-3">Volver a Inicio</a>
        </form>
    </div>
</body>
</html>
