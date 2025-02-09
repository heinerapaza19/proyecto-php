<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en PHP y MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3bde4277ff.js" crossorigin="anonymous"></script>
    <style>
        /* Cambiar el color de fondo a un tono más oscuro con animación */
        body {
            background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460);
            /* Tonos oscuros azulados */
            background-size: 400% 400%;
            animation: cambioColor 10s infinite alternate;
            /* Animación de fondo */
            color: white;
            /* Cambia el color del texto para mejor visibilidad */
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
    <script>
        function eliminar(){
            var respuesta = confirm("¿Estas seguro que deseas eliminar?");
            return respuesta;
        }
    </script>
    <h1 class="text-center">HOLA HEINER</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_persona.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">REGISTRO DE PERSONA</h3>
            <?php
           
            include "controlador/registro_persona.php";
            ?>
            <div class="mb-3">
                <label class="form-label">NOMBRE DE LA PERSONA</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="mb-3">
                <label class="form-label">APELLIDO DE LA PERSONA</label>
                <input type="text" class="form-control" name="apellido" required>
            </div>
            <div class="mb-3">
                <label class="form-label">DNI DE LA PERSONA</label>
                <input type="text" class="form-control" name="dni" required>
            </div>
            <div class="mb-3">
                <label class="form-label">FECHA DE NACIMIENTO</label>
                <input type="date" class="form-control" name="fecha" required>
            </div>
            <div class="mb-3">
                <label class="form-label">CORREO</label>
                <input type="email" class="form-control" name="correo" required>
            </div>
            <div class="mb-3">
                <label class="form-label">OCUPACION</label>
                <input type="text" class="form-control" name="ocupacion" required>
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="OK">REGISTRAR</button>
        </form>
        <div class="col-8 p-4">
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">NOMBRES</th>
                            <th class="text-center">APELLIDOS</th>
                            <th class="text-center">DNI</th>
                            <th class="text-center">FECHA DE NAC</th>
                            <th class="text-center">CORREO</th>
                            <th class="tex-center">OCUPACION</th>
                            <th class="text-center">ACCIONES</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "modelo/conexion.php";
                        $sql = $conexion->query("SELECT * FROM persona");
                        while ($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $datos->id_persona ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->apellido ?></td>
                                <td><?= $datos->dni ?></td>
                                <td><?= $datos->fecha_de_nac ?></td>
                                <td><?= $datos->correo ?></td>
                                <td><?= $datos->ocupacion ?></td>
                                <td>
                                    <a href="modificar_registro.php?id=<?= $datos->id_persona ?>" class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_persona ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>