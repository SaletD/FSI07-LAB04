<!doctype html>
<html lang="en">

<head>
  <title>HOTEL</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <div class= "container-fluid bg-warning">
        <div class ="row">
            <div class="col-md">
                <header class="py-3">
                    <h3>class="texto-center"Prueba1</h3>
                </header>
            </div>
        </div>
    </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

CREATE TABLE usuarios{
    id INT AUTO_INCREMENT PRIMATY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    dni VARCHAR(8) NOT NULL,
    celular VARCHAR(20) NOT NULL,
};
CREATE TABLE usuarios{
    id INT AUTO_INCREMENT PRIMATY KEY,
    fechaingreso DATE NOT NULL,
    noches INT(3) NOT NULL,
    habitacion VARCHAR(15) NOT NULL,
    huespedes INT(3)CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    usuario_id INT(10) NOT FULL,
};