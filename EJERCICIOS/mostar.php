<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $cliente_id = $_GET['id'];
    
    // Consulta para obtener los detalles del cliente
    $sql = "SELECT * FROM clientes WHERE id = $cliente_id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $cliente = $result->fetch_assoc();
    } else {
        echo "Cliente no encontrado.";
    }
} else {
    echo "ID de cliente no proporcionado.";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Cliente</title>
</head>
<body>
    <div class="container">
        <h2>Detalles del Cliente</h2>
        <p><strong>ID del Cliente:</strong> <?php echo $cliente['id']; ?></p>
        <p><strong>Nombre del Cliente:</strong> <?php echo $cliente['nombre']; ?></p>
        <p><strong>Correo del Cliente:</strong> <?php echo $cliente['correo']; ?></p>
        <a href="lista.php" class="btn btn-primary">Volver a la lista de clientes</a>
    </div>
</body>
</html>
