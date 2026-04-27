<?php

$servername = "localhost";
$username = "root"; // Cambiar por tu nombre de usuario
$password = ""; // Cambiar por tu contraseña
$dbname = "bcescuela"; // Cambiar por el nombre de tu base de datos



$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Conexión fallida: " . $conn->connect_error);
}


// Dato a insertar
$nombre = "Juan Pérez";

// Insertar directamente con query
$sql = "INSERT INTO personas7 (nombre) VALUES ('$nombre')";

if ($conn->query($sql)) {
    echo "Dato insertado correctamente.";
} else {
    echo "Error al insertar: " . $conn->error;
}

$conn->close();