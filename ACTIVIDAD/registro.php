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
        $apellidos = $_POST["apellidos"];
        $dni = $_POST["dni"];
        $celular = $_POST["celular"];
        $sql = "SELECT id FROM usuarios WHERE nombres = '$nombre'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "El usuario ya existe. Por favor, inicie sesión o utilice otro nombre.<br>";
        } else {
            $sql = "INSERT INTO usuarios (nombres, apellidos, dni, celular) 
                    VALUES ('$nombre', '$apellidos', '$dni', '$celular')";
            if ($conn->query($sql) === TRUE) {
                echo "<div class='mensaje-exito'>!Usuario registrado con éxito!</div> <span class='boton-iniciar'><a href='login.php'>Iniciar sesión</a></span>.<br>";
                
            } else {
                echo "Error al registrar el usuario: " . $conn->error . "<br>";
            }
        }
        $conn->close();
    }
    ?>
    <form action=""  method="post">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required><br><br>
        </div>
        <div class="form-group">
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" required><br><br>
            <label for="celular">Celular:</label>
            <input type="text" id="celular" name="celular" required><br><br>
        </div>
            <button type="submit">Registrar</button>
    </form>
</body>
</html>
