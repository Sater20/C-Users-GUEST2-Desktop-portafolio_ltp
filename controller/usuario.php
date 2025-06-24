<?php
    if(!empty ($_POST["btnenviar"])){
        if(!empty($_POST["nombre_y_apellido"]) and !empty($_POST["email"]) and !empty($_POST["nota"]) and !empty($_POST["fecha"])) {

            $nombre_y_apellido = $_POST["nombre_y_apellido"];
            $email = $_POST["email"];
            $nota = $_POST["nota"];
            $fecha = $_POST["fecha"];
            

            $sql = $conn->query(query: " insert into comentario (nombre_y_apellido, email, nota, fecha) values('$nombre_y_apellido', '$email', '$nota', '$fecha') ");
            
        }
    }
?>

