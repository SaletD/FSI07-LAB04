<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
</head>
<body>
    <div class="container">
        <h2>Agregar Cliente</h2>
        <form action="agregar.php" method="POST">
            <div class="form-group">
                <label for="nombre_cliente">Nombre del Cliente:</label>
                <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" required>
            </div>
            <div class="form-group">
                <label for="correo_cliente">Correo del Cliente:</label>
                <input type="email" class="form-control" id="correo_cliente" name="correo_cliente" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Cliente</button>
        </form>
        
        <h2>Agregar Producto</h2>
        <form action="productoadd.php" method="POST">
            <div class="form-group">
                <label for="nombre_producto">Nombre del Producto:</label>
                <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" required>
            </div>
            <div class="form-group">
                <label for="precio_producto">Precio del Producto:</label>
                <input type="number" class="form-control" id="precio_producto" name="precio_producto" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </form>
    </div>
</body>
</html>
