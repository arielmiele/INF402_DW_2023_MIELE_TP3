<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content='ie=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INF402 - DW - 2023 - Ariel Miele - TP3 ABM Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>
    <div class="container mt-5">
        <h2>Listado de Productos</h2>
        <a href="agregar.php" class="btn btn-primary mb-3">Agregar Producto</a>
        
        <!-- Tabla para mostrar productos -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad en Stock</th>
                    <th>Categoría</th>
                    <th>Fecha de Ingreso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'funciones.php';
                $productos = obtenerProductos(); // Función para obtener todos los productos de la base de datos
                foreach ($productos as $producto) { ?>
                    <tr>
                        <td><?php echo $producto['ID']; ?></td>
                        <td><?php echo $producto['Nombre']; ?></td>
                        <td><?php echo $producto['Descripcion']; ?></td>
                        <td><?php echo $producto['Precio']; ?></td>
                        <td><?php echo $producto['CantidadEnStock']; ?></td>
                        <td><?php echo $producto['Categoria']; ?></td>
                        <td><?php echo $producto['FechaDeIngreso']; ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $producto['ID']; ?>" class="btn btn-sm btn-info">Editar</a>
                            <a href="eliminar.php?id=<?php echo $producto['ID']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro que quiere eliminar el producto?')">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
