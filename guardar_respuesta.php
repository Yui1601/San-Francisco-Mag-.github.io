<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "encuesta_magú");

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$satisfaccion = $_POST['satisfaccion'];
$mejora = $_POST['mejora'];

// Insertar datos en la base de datos
$sql = "INSERT INTO respuestas (nombre, edad, satisfaccion, mejora)
        VALUES ('$nombre', $edad, '$satisfaccion', '$mejora')";

if ($conexion->query($sql) === TRUE) {
    echo "Respuestas guardadas correctamente.";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>