<?php
    include_once('../config/config.php');
    include('./addCliente.php');

    $cliente = new AddCliente();
    $data = $cliente->getAll();

    if(isset($_GET['id']) && !empty($_GET['id'])){
       $remove = $cliente->delete($_GET['id']);
       if($remove){
        header('Location: '.'index.php');
       }
       else{
        $mensaje = '<div class="alert alert-danger">No fue posible eliminar los datos</div>';
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
    <?php include('./nav.php')?>
    <div class="container">
        <h2>Lista de clientes</h2>
        <div class="row">
            <?php
               
                while($pt = mysqli_fetch_object($data)){

                    echo "<div class='col'>";
                    echo "<div class='border border-info p-2'>";
                        echo "<div>";
                            echo "<h5>Nombre cliente</h5>";
                            echo "<p>$pt->nombre</p>";
                        echo "</div>";
                        echo "<div>";
                            echo "<h5>Correo electronico</h5>";
                            echo "<p>$pt->correo</p>";
                        echo "</div>";
                        echo "<div>";
                            echo "<h5>Solicitud</h5>";
                            echo "<p>$pt->necesidad</p>";
                        echo "</div>";
                        echo "<div>";
                            echo "<a class='btn btn-success' href='edit.php?id=$pt->id'>Modificar</a>  <a class='btn btn-danger' href='index.php?id=$pt->id'>Eliminar</a>";
                        echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
    <?php include('./footer.php')?>

</body>
</html>