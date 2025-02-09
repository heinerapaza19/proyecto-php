<?php

//para modificar registro
if(!empty($_POST["btnregistrar"])){
    //validar que los campos no esten vacios
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"]) and !empty($_POST["ocupacion"])) {
        
        //recoje y almacena para modificar en base de datos
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha_de_nac = $_POST["fecha"]; 
        $correo = $_POST["correo"];
        $ocupacion = $_POST["ocupacion"];

        //modificar en base de datos
        $sql = $conexion->query(" update persona set nombre='$nombre', apellido='$apellido', dni=$dni, fecha_de_nac='$fecha_de_nac', correo='$correo', ocupacion='$ocupacion' where id_persona=$id");
        //aqui se ve se modifico exitosamente
        if($sql==1){
            header("location: index.php");
        }else{
            echo "<div style='background-color: #90EE90; color: black; padding: 10px; border-radius: 5px; text-align: center; font-weight: bold;'>
                    ✅ ERROR AL MODIFICAR
                </div>";
            
        }

    }else {
        echo "<div style='background-color: yellow; color: black; padding: 10px; border-radius: 5px; text-align: center; font-weight: bold;'>
            ⚠️ ALGUNOS ESPACIOS ESTÁN VACÍOS
        </div>";
    }
    
    
    /*else {
        echo "<div class='alert alert-warning text-dark'>ALGUNOS ESPACIOS ESTÁN VACÍOS</div>";
    }*/
    
}
?>