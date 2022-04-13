-- Mostrar las Bases de Datos existentes
SHOW DATABASES;

-- Crear una Base de Datos
CREATE DATABASE anime;

-- Selecionar una BD
USE anime;

-- Mostrar las tablas de una BD
SHOW TABLES;

-- Crear una tabla
CREATE TABLE Customers (
    CustomerID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Identification INT UNIQUE NOT NULL,
    Name VARCHAR(30) NOT NULL,
    LastName VARCHAR(30) NOT NULL,
    Age INT UNSIGNED NOT NULL,
    Cell VARCHAR(15) NOT NULL,
    Status ENUM("active", "inactive") DEFAULT "inactive",
    Address VARCHAR(50),
    Create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Mostrar los detalles de las columnas de una tabla
DESC table_name;
-- Insertar un registro
INSERT INTO Customers ( Identification, Name, LastName, Age, Cell)
VALUES (1234567890, "Satellizer", "L. Bridget", "20", "3201234567");

