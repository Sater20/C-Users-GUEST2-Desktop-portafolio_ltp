<?php
        include "model/conn.php";
        $id = $_GET["id"];
        $sql = $conn->query(query:"select * from comentario where id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/a4063c8cf8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form class="col-4 p-4 m-auto" method="POST">
                <h3 class="text-center">Actualizar Comentario</h3>
                <input type="hidden" name="id" value="<?= $_GET['id']?>">
                             <?php
                                include "controller/editar-comentario.php";
                                while( $dato = $sql->fetch_object()){
                            ?>
                        <div class="input-group mb-3">
                            <div class="form-floating">
                                 <input type="text" class="form-control" id="floatingInputGroup1" name="nombre_y_apellido" value="<?= $dato->nombre_y_apellido?>">
                                 <label for="floatingInputGroup1">Nombre y Apellido</label>
                             </div>
                            </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" value="<?= $dato->email?>">
                            <label for="floatingInput">Email</label>
                        </div>
                    <div class="form-floating mb-3">
                         <textarea class="form-control" name="nota" id="floatingTextarea2" style="height: 100px"><?= $dato->nota?></textarea>
                         <label for="floatingTextarea2">Comentario</label>
                    </div>
                         <div class="input-group mb-3">
                            <div class="form-floating">
                                 <input type="hidden" class="form-control" id="floatingInputGroup1" name="fecha" value="<?php echo date('Y-m-d H:i:s'); ?>">
                             </div>
                         </div>
                         <?php
                            }
                         ?>
                         <div class="text-center">
                             <button type="submit" class="btn btn-primary" name="btnactualizar" value="ok">Actualizar</button>
                         </div>
            </form>

</body>
</html>