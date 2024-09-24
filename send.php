<?php

include("conexion.php");

if (isset($_POST['send'])) {
    // Verifica si los campos del formulario están completos
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['message']) >= 1
    ) {
        // Elimina espacios en blanco de las entradas del usuario
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
        
        // Prepara la declaración SQL para prevenir inyecciones SQL
        $stmt = $conex->prepare("INSERT INTO datos (nombre, telefono, email, mensaje) VALUES (?, ?, ?, ?)");
        
        if ($stmt) {
            // Asigna los parámetros
            $stmt->bind_param("ssss", $name, $phone, $email, $message);
            
            // Ejecuta la consulta
            if ($stmt->execute()) {
                // Mensaje de éxito
                echo "Datos guardados exitosamente.";
            } else {
                // Mensaje de error
                echo "Error al guardar los datos: " . $stmt->error;
            }

            // Cierra la declaración
            $stmt->close();
        } else {
            echo "Error al preparar la consulta: " . $conex->error;
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}

?>
