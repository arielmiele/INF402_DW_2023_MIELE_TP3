
<?php
include 'conexion.php';

// Función para obtener productos
function obtenerProductos() {
    global $conn;
    $sql = "SELECT * FROM Productos";
    $result = $conn->query($sql);
    $productos = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $productos[] = $row;
        }
    }
    return $productos;
}

// Función para agregar un producto
function agregarProducto($nombre, $descripcion, $precio, $cantidad, $categoria, $fecha) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Productos (Nombre, Descripcion, Precio, CantidadEnStock, Categoria, FechaDeIngreso) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdiss", $nombre, $descripcion, $precio, $cantidad, $categoria, $fecha);
    return $stmt->execute();
}

// Función para eliminar un producto
function eliminarProducto($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM Productos WHERE ID = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

// Función para obtener un producto por ID
function obtenerProductoPorId($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Productos WHERE ID = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

// Función para actualizar un producto
function actualizarProducto($id, $nombre, $descripcion, $precio, $cantidad, $categoria, $fecha) {
    global $conn;
    $stmt = $conn->prepare("UPDATE Productos SET Nombre = ?, Descripcion = ?, Precio = ?, CantidadEnStock = ?, Categoria = ?, FechaDeIngreso = ? WHERE ID = ?");
    $stmt->bind_param("ssdissi", $nombre, $descripcion, $precio, $cantidad, $categoria, $fecha, $id);
    return $stmt->execute();
}
?>
