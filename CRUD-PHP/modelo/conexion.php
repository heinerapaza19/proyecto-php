<?php
$conexion = new mysqli("localhost", "root", "", "crud-php");

// Establecer el juego de caracteres
$conexion->set_charset("utf8");

// Variable para almacenar el mensaje de éxito
$mensaje = "";

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    // Si hubo un error en la conexión, mostrar el mensaje de error y detener la ejecución
    die('<div class="alert alert-danger">Conexión fallida: ' . $conexion->connect_error . '</div>');
} else {
    // Si la conexión fue exitosa, mostrar un mensaje de éxito en color rosado
    echo '<div class="alert" style="background-color: pink; color: black; border: 1px solid #ff69b4; padding: 10px; border-radius: 5px;">
            Conexión exitosa a la base de datos.
          </div>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión a la base de datos</title>
</head>
<body>

<!-- Aquí puedes mostrar el mensaje cuando la conexión es exitosa -->
<?php
if ($mensaje != "") {
    echo "<p>$mensaje</p>";
}
?>

</body>
</html>

