<?php
include("conexion.php");

$nombre_cliente = $_POST['nombre_cliente'];
$correo_cliente = $_POST['correo_cliente'];

$sql = "INSERT INTO clientes (nombre, correo) VALUES ('$nombre_cliente', '$correo_cliente')";

if ($conn->query($sql) === TRUE) {
    // Obtener el ID del cliente recién agregado
    $cliente_id = $conn->insert_id;
    $conn->close();
    
    // Redirigir a la página de detalles del cliente
    header("Location:mostrar.php?id=$cliente_id");
    exit();
} else {
    echo "Error al agregar el cliente: " . $conn->error;
}

$conn->close();
?>
