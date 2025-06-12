<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Conectar a la base de datos (cambia el nombre de la base si es diferente)
$conexion = new mysqli("localhost", "root", "", "encuesta_magú");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$satisfaccion = $_POST['satisfaccion'];
$mejora = $_POST['mejora'];

// Insertar datos
$sql = "INSERT INTO respuestas (nombre, edad, satisfaccion, mejora)
        VALUES ('$nombre', $edad, '$satisfaccion', '$mejora')";

if ($conexion->query($sql) === TRUE) {
    // 👇 ESTE ES EL MENSAJE QUE SE MUESTRA AL GUARDAR
    echo "<script>
        alert('¡Gracias por responder la encuesta!');
        window.location.href = 'encuesta.html';
    </script>";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>
