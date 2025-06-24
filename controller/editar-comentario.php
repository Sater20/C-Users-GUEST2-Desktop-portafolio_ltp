<?php
    if(!empty($_POST["btnactualizar"])){
        if(!empty($_POST["nombre_y_apellido"]) and !empty($_POST["email"]) and !empty($_POST["nota"])){
            
            $id = $_POST["id"];
            $nombre_y_apellido = $_POST["nombre_y_apellido"];
            $email = $_POST["email"];
            $nota = $_POST["nota"];
            
            $qlq = $conn ->query("update comentario set nombre_y_apellido='$nombre_y_apellido' , email='$email' , nota='$nota' where id= $id");
        }
    }
?>