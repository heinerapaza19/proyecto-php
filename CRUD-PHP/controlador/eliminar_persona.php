<?php
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from persona where id_persona=$id");
    if ($sql == 1) {
        echo '<div class="alert alert-warning">ELIMINADO CORRECTAMENTE</div>'; // Amarillo
    } else {
        echo '<div class="alert alert-success">ERROR AL ELIMINAR</div>'; // Verde claro
    }
    
}
?>