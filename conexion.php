<?php
// Crear la conexión utilizando mysqli
$conex = mysqli_connect("localhost", "root", "", "formulario");

// Verificar la conexión
if (!$conex) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Si la conexión es exitosa
echo "Conexión exitosa.";
?>