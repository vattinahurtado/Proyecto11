<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inscripciones";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Create table
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "CREATE TABLE inscripciones (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    documento_identidad VARCHAR(20) NOT NULL,
    nombre_acudiente VARCHAR(30) NOT NULL,
    apellido_acudiente VARCHAR(30) NOT NULL,
    documento_acudiente VARCHAR(20) NOT NULL,
    telefono_contacto VARCHAR(15) NOT NULL,
    documentos_estudiante BLOB NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>