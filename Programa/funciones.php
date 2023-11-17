<?php
include 'conexion.php';

// Función para obtener productos
function obtenerProductos() {
    global $conn;
    $sql = "SELECT * FROM Productos";
    $stmt = $conn->query($sql);
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $productos;
}

// Función para agregar un producto
function agregarProducto($nombre, $descripcion, $precio, $cantidad, $categoria, $fecha) {
    global $conn;
    try {
        $stmt = $conn->prepare("INSERT INTO Productos (Nombre, Descripcion, Precio, CantidadEnStock, Categoria, FechaDeIngreso) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$nombre, $descripcion, $precio, $cantidad, $categoria, $fecha]);
        return true;
    } catch (PDOException $e) {
        echo "Error al agregar el producto: " . $e->getMessage();
        return false;
    }
}

// Función para eliminar un producto
function eliminarProducto($id) {
    global $conn;
    try {
        $stmt = $conn->prepare("DELETE FROM Productos WHERE ID = ?");
        $stmt->execute([$id]);
        return true;
    } catch (PDOException $e) {
        echo "Error al eliminar el producto: " . $e->getMessage();
        return false;
    }
}

// Función para obtener un producto por ID
function obtenerProductoPorId($id) {
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT * FROM Productos WHERE ID = ?");
        $stmt->execute([$id]);
        $producto = $stmt->fetch(PDO::FETCH_ASSOC);
        return $producto;
    } catch (PDOException $e) {
        echo "Error al obtener el producto: " . $e->getMessage();
        return false;
    }
}

// Función para actualizar un producto
function actualizarProducto($id, $nombre, $descripcion, $precio, $cantidad, $categoria, $fecha) {
    global $conn;
    try {
        $stmt = $conn->prepare("UPDATE Productos SET Nombre = ?, Descripcion = ?, Precio = ?, CantidadEnStock = ?, Categoria = ?, FechaDeIngreso = ? WHERE ID = ?");
        $stmt->execute([$nombre, $descripcion, $precio, $cantidad, $categoria, $fecha, $id]);
        return true;
    } catch (PDOException $e) {
        echo "Error al actualizar el producto: " . $e->getMessage();
        return false;
    }
}
?>
