<!DOCTYPE html>
<html>
<head>
    <title>Detalles de la Reserva</title>
</head>
<body>
    <?php
    $nombre_reserva = $_GET["nombre_reserva"];
    $habitacion_reserva = $_GET["habitacion_reserva"];
    $fechaIngreso_reserva = $_GET["fechaIngreso_reserva"];
    $noches_reserva = $_GET["noches_reserva"];

    if (!empty($nombre_reserva)) {
        echo "<h2>Detalles de la Reserva:</h2>";
        echo "<p><strong>Nombre:</strong> $nombre_reserva</p>";
        echo "<p><strong>Habitación:</strong> $habitacion_reserva</p>";
        echo "<p><strong>Ficha de Ingreso:</strong> $fechaIngreso_reserva</p>";
        echo "<p><strong>Noches:</strong> $noches_reserva</p>";
    }
    ?>
</body>
</html>
