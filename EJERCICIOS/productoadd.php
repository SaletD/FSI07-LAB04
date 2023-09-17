<?php
include("conexion.php");

$nombre_producto = $_POST['nombre_producto'];
$precio_producto = $_POST['precio_producto'];

$sql = "INSERT INTO productos (nombre, precio) VALUES ('$nombre_producto', $precio_producto)";

if ($conn->query($sql) === TRUE) {
    // Obtener el ID del producto recién agregado
    $producto_id = $conn->insert_id;
    $conn->close();
    
    // Redirigir a la página de detalles del producto
    header("Location: detalle_producto.php?id=$producto_id");
    exit();
} else {
    echo "Error al agregar el producto: " . $conn->error;
}

$conn->close();
?>
