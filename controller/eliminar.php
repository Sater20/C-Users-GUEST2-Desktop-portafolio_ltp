<?php
    if(!empty($_GET ["id"])){
        $id = $_GET ["id"];
        $sql = $conn->query(query:"delete from comentario where id=$id");

    }
?>