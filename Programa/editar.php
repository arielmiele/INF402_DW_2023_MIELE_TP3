<?php
include 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $producto = obtenerProductoPorId($id);

    if (!$producto) {
        echo "Producto no encontrado.";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];
    $fecha = $_POST['fecha'];

    if (actualizarProducto($id, $nombre, $descripcion, $precio, $cantidad, $categoria, $fecha)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error al actualizar el producto.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Producto</h2>
        <form method="post" action="editar.php">
            <input type="hidden" name="id" value="<?php echo $producto['ID']; ?>">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $producto['Nombre']; ?>">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $producto['Descripcion']; ?>">
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $producto['Precio']; ?>">
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad en Stock:</label>
                <input type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo $producto['CantidadEnStock']; ?>">
            </div>
            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo $producto['Categoria']; ?>">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha de Ingreso:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $producto['FechaDeIngreso']; ?>">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
            <!-- Botón para volver a la página de inicio -->
            <br>
            <a href="index.php" class="btn btn-secondary mt-3">Volver a Inicio</a>
        </form>
    </div>
</body>
</html>
