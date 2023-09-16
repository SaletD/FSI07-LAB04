<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="container">
        <img src="logo.jpg">
    </div>
    <?php
    $nombre_reserva = "";
    $habitacion_reserva = "";
    $fechaIngreso_reserva = "";
    $noches_reserva = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = " ";
        $dbname = "hotel";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }
        $nombre = $_POST["nombre"];
        $habitacion = $_POST["habitacion"];
        $fechaInicio = $_POST["fichaingreso"];
        $noches = $_POST["noches"];
        $huespedes = $_POST["huespedes"];
        $sql = "SELECT id FROM usuarios WHERE nombres = '$nombre'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $usuarioId = $row["id"];
            $sql_reserva = "INSERT INTO reservas (usuarios_id, fichaingreso, noches, habitacion,huespedes) 
                            VALUES ('$usuarioId', '$fechaInicio', '$noches', '$habitacion','$huespedes')";
            if ($conn->query($sql_reserva) === TRUE) {
                echo "Reserva realizada con éxito.<br>";
                header("Location: detalles.php?nombre_reserva=$nombre&habitacion_reserva=$habitacion&fechaIngreso_reserva=$fechaInicio&noches_reserva=$noches");
                exit;
            } else {
                echo "Error al realizar la reserva: " . $conn->error . "<br>";
            }
        } else {
            echo "<div class='mensaje-error'>!El usuario no existe!</div> <span class='boton-registrarse'><a href='registro.php'>Registrarse</a></span>.<br>";
        }
        $conn->close();
    }
    ?>
    <form action=""  method="post">
        <div class="form-group">
            <label for="nombre">Elige usuario:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
        </div>
        <div class="form-group">
            <label for="habitacion">Habitación:</label>
            <input type="text" id="habitacion" name="habitacion" required><br><br>
        </div>
        </div>
        <div class="form-group">
            <label for="fichaingreso">Fecha de Entrada:</label>
            <input type="date" id="fichaingreso" name="fichaingreso" required><br><br>
        </div>
        <div class="form-group">
            <label for="huespedes">N° de Huéspedes:</label>
            <input type="text" id="huespedes" name="huespedes" required><br><br>
        <div class="form-group">
            <label for="noches">Noches:</label>
            <input type="number" id="noches" name="noches" required><br><br>
        </div>
        <button type="submit">Reservar</button>
    </form>
</body>
</html>
