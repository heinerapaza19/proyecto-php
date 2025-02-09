<?php
include "modelo/conexion.php";

$id = $_GET["id"];
echo $id;
//hace la consulta a sql para tarer todo los  datos
$sql = $conexion->query("select * from persona where id_persona=$id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Cambiar el color de fondo a un tono oscuro sin azul */
        body {
            background: linear-gradient(135deg, #0d0d0d, #1c1c1c, #3d0f0f);
            /* Negro, gris oscuro y vino */
            background-size: 400% 400%;
            animation: cambioColor 10s infinite alternate;
            /* Animación de fondo */
            color: white;
            /* Texto en blanco para contraste */
            transition: background 0.5s ease-in-out;
        }

        /* Animación para hacer que el fondo cambie suavemente */
        @keyframes cambioColor {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }
        }

        /* Mejorar la apariencia de la tabla */
        /* Cambiar el color a un tono verde oscuro */
        body {
            background: linear-gradient(135deg,rgb(56, 136, 72), #14532d,rgb(86, 201, 103));
            /* Verdes oscuros */
            background-size: 400% 400%;
            animation: cambioColor 10s infinite alternate;
            /* Animación de fondo */
            color: white;
            /* Texto en blanco para contraste */
            transition: background 0.5s ease-in-out;
        }

        /* Animación para hacer que el fondo cambie suavemente */
        @keyframes cambioColor {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }
        }

        /* Mejorar la apariencia de la tabla */
        .table {
            font-size: 14px;
            background-color: rgba(255, 255, 255, 0.1);
            /* Fondo semitransparente */
            color: white;
            border-radius: 10px;
        }

        /* Ajustar celdas para que sean más visibles */
        .table td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px;
        }

        /* Bordes de la tabla */
        .table th,
        .table td {
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body>

    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">MODIFICAR REGISTRO</h3>
        <input type="hidden" name="id" value=" <?= $_GET["id"]?>" >
        <?php
        //para mostrar los si se modifico o salio error
        include "controlador/modificar_registro.php";
        while ($datos = $sql->fetch_object()) { ?>

            <div class="mb-3">
                <label for="nombre" class="form-label">NOMBRE DE LA PERSONA</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">APELLIDO DE LA PERSONA</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI DE LA PERSONA</label>
                <input type="text" class="form-control" name="dni" value="<?= $datos->dni ?>">
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">FECHA DE NACIMIENTO</label>
                <input type="date" class="form-control" name="fecha" value="<?= $datos->fecha_de_nac ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CORREO</label>
                <input type="text" class="form-control" name="correo" value="<?= $datos->correo ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">OCUPACION</label>
                <input type="text" class="form-control" name="ocupacion" value="<?= $datos->ocupacion ?>">
            </div>

        <?php }
        ?>

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="OK">MODOFICAR REGISTRO</button>
    </form>

</body>

</html>
