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
    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="./CSS/mq2.css"> -->

</head>

<body>
    
    <!-- Menu de navegación -->

    <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./imagenes/logo.png" alt="" width="90" height="60"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contáctame</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Sobre mi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">¿Quién soy?</a></li>
                            <li><a class="dropdown-item" href="#">Portafollio</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">otro campo</a></li>

                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
            </div>
        </div>
    </nav>

    <img src="./imagenes/baneer.png" alt="">

    <!-- seccion 1: Mensaje: articulo -->

    <section >

        <article class="seccion1">
            <p>Después de revisar mi experiencia y servicios en recursos humanos y habilidades blandas, ¿quieres
                contactar directamente conmigo?
                <br>
                <br>
                Estupendo, estaré encantada de saber de ti y trabajar juntos para encontrar la solución adecuada para ti
                y tu empresa
            </p>
        </article>
    </section>

    <!-- seccion 2: formulario: imagen y texto -->
    <section class="container bg-white">
        
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Ingresa tu nombre</label>
                <input type="text" class="form-control" id="nombres" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo de contacto</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Tu correo se mantendrá privado</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Cuentame lo que necesitas</label>
                <textarea class="form-control" id="necesidad" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </section>

    <!-- seccion 3: videos en youtube: carrusel de videos, y texto -->
    <section class="seccion3">

        <article>
            <h2 class="textoprincipal">Últimos vídeos en Youtube</h2>
            <br>
            <section class="texto">
                <div class="youtube">
                    <iframe class="video" width="601" height="338"
                        src="https://www.youtube.com/embed/MjuTWg0IYwU?list=UULFG9DyWKmkNSHNIQdkK8LFaQ"
                        title="💜 Experiencias que cambian vidas con Edna Cárdenas" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>

                    <h4>😍 Estoy emocionada de traer para ti, este segmento llamado “experiencias que inspiran”.
                    </h4>
                </div>


                <div class="youtube">
                    <iframe class="video" width="601" height="338"
                        src="https://www.youtube.com/embed/WaKlCoug1uE?list=UULFG9DyWKmkNSHNIQdkK8LFaQ"
                        title="5 pasos para estar en equilibrio con tus emociones" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <h4>😍 5 pasos para estar en equilibrio con tus emociones.</h4>
                </div>
            </section>
        </article>
        <div class="botonvideos"><a href="">
                <div>ver más</div>
            </a></div>
    </section>

    <!-- Pie de pagina -->

    <footer>
        <address>Karol Neiza © Reservados todos los derechos</address>

        <div>
            <a href="https://www.linkedin.com/in/karolneiza/">Linkedin</a>-
            <a href="https://www.instagram.com/karolneiza/">Instagram</a>-
            <a href="https://www.facebook.com/karolneizag/">Facebook</a>-
            <a href="http://youtube.com/@karolneiza">Youtube</a>-
            <a href="https://www.tiktok.com/@karolneiza">Tiktok</a>
        </div>
    </footer>


</body>

</html>