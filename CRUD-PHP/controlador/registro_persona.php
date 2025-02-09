<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["dni"]) && !empty($_POST["fecha"]) && !empty($_POST["correo"]) && isset($_POST["ocupacion"])) {
        
        // Conexión a la base de datos
        include "modelo/conexion.php";

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha_de_nac = $_POST["fecha"];
        $correo = $_POST["correo"];
        $ocupacion = $_POST["ocupacion"];

        $sql = $conexion->query("UPDATE persona SET nombre='$nombre', apellido='$apellido', dni='$dni', fecha_de_nac='$fecha_de_nac', correo='$correo', ocupacion='$ocupacion' WHERE id_persona=$id");

        if ($sql) {
            header("location: index.php");
        } else {
            echo "<div style='background-color: red; color: white; padding: 10px; border-radius: 5px; text-align: center; font-weight: bold;'>
                    ❌ ERROR AL MODIFICAR
                </div>";
        }
    } else {
        echo "<div style='background-color: yellow; color: black; padding: 10px; border-radius: 5px; text-align: center; font-weight: bold;'>
            ⚠️ ALGUNOS ESPACIOS ESTÁN VACÍOS
        </div>";
    }
}
?> 

