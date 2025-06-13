<?php
$conexion = new mysqli("localhost", "root", "", "encuesta_db");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$satisfaccion = $_POST['satisfaccion'];
$mejora = $_POST['mejora'];

$sql = "INSERT INTO respuestas (nombre, edad, satisfaccion, mejora) 
        VALUES ('$nombre', '$edad', '$satisfaccion', '$mejora')";

if ($conexion->query($sql) === TRUE) {
    echo "¡Gracias por responder la encuesta!";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
