-- Active: 1700175238520@@127.0.0.1@3306@tienda
CREATE DATABASE Tienda;
USE Tienda;

CREATE TABLE Productos (
    ID INT AUTO_INCREMENT,
    Nombre VARCHAR(255),
    Descripcion VARCHAR(255),
    Precio DECIMAL(10,2),
    CantidadEnStock INT,
    Categoria VARCHAR(255),
    FechaDeIngreso DATE,
    PRIMARY KEY (ID)
);

INSERT INTO Productos (Nombre, Descripcion, Precio, CantidadEnStock, Categoria, FechaDeIngreso) VALUES 
('Producto 1', 'Descripción del producto 1', 100.00, 50, 'Categoría 1', '2023-01-01'),
('Producto 2', 'Descripción del producto 2', 200.00, 30, 'Categoría 2', '2023-02-10'),
('Producto 3', 'Descripción del producto 3', 150.00, 40, 'Categoría 1', '2023-03-01'),
('Producto 4', 'Descripción del producto 4', 300.00, 20, 'Categoría 3', '2023-04-21'),
('Producto 5', 'Descripción del producto 5', 250.00, 10, 'Categoría 2', '2023-05-01'),
('Producto 5', 'Descripción del producto 5', 1250.00, 10, 'Categoría 4', '2023-07-01'),
('Producto 5', 'Descripción del producto 5', 2250.00, 10, 'Categoría 5', '2023-09-09'),
('Producto 5', 'Descripción del producto 5', 650.00, 10, 'Categoría 5', '2023-01-11'),
('Producto 5', 'Descripción del producto 5', 8250.00, 10, 'Categoría 5', '2023-12-31');