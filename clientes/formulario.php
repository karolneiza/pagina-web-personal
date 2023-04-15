<?php
    include_once('../config/config.php');
    include('./addCliente.php');

    if( isset($_POST) && !empty($_POST) ){
        
        $cliente = new AddCliente();

        $save = $cliente->save($_POST);

        if ($save){
            $mensaje = '<div class="alert alert-success">Datos enviados</div>';
        }else{
            $mensaje = '<div class="alert alert-danger">Error al registrar</div>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/paginastyle.css">
    <!-- Responsive boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- conexion para la tipografía de la letra -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/paginastyle.css">
</head>
<body>
    <?php
        
        if(isset($mensaje)){
            echo $mensaje;
        }
    ?>
    <?php include('./nav.php')?>
    <section class="container bg-white">
    <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Ingresa tu nombre</label>
                <input type="text" class="form-control" id="nombres" name="nombres" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo de contacto</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Tu correo se mantendrá privado</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Cuentame lo que necesitas</label>
                <textarea class="form-control" id="necesidad" name="necesidad" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </section>
    <?php include('./footer.php')?>
</body>
</html>

