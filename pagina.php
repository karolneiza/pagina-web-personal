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
                        <a class="nav-link" href="#">Contenido</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./clientes/formulario.php">Contáctame</a>
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
        <img src="./imagenes/baneer.png" alt="icono" width="181" class="img-fluid mx-auto py-5">
    </nav>

    <section class=" py-4 text-sm-center text-md-center text-lg-center text-xl-center " >
      <div class="container-fluid ">

             <!-- seccion 1: Mensaje: articulo -->

         <section >
             <article class="seccion1">
                 <p class="py-3"> 
                        Después de revisar mi experiencia y servicios en recursos humanos y habilidades blandas, ¿quieres
                        contactar directamente conmigo?
                        <br>
                        <br>
                        Estupendo, estaré encantada de saber de ti y trabajar juntos para encontrar la solución adecuada para ti
                        y tu empresa
                 </p>
             </article>

             <div class="botonvideos">
               <a href="./clientes/formulario.php">
                 <div>Contáctame</div>
               </a> 
             </div>
        
        
         </section>

         
            <!-- seccion 3: videos en youtube: carrusel de videos, y texto -->
            
<section class="seccion3">
    <h2 class="textoprincipal">Últimos vídeos en Youtube</h2>
    <section class="texto">         
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-center"> 
                <div class="youtube">
                            <div class="card-video-top">

                                    <iframe class="video" width="601" height="338"
                                        src="https://www.youtube.com/embed/MjuTWg0IYwU?list=UULFG9DyWKmkNSHNIQdkK8LFaQ"
                                        title="💜 Experiencias que cambian vidas con Edna Cárdenas" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                            </div>
                    <div class="card-body">
                            <h4 class="card-text">😍 Estoy emocionada de traer para ti, este segmento llamado “experiencias que inspiran”.
                            </h4>
                        </div>
                </div>
            </div>        
        </div>
            <div class="col-md-6">
                <div class="card text-center"> 
                    <div class="youtube">
                        <iframe class="video" width="601" height="338"
                            src="https://www.youtube.com/embed/WaKlCoug1uE?list=UULFG9DyWKmkNSHNIQdkK8LFaQ"
                            title="5 pasos para estar en equilibrio con tus emociones" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                      <div class="card-body">
                          <h4 class= "card-title">😍 5 pasos para estar en equilibrio con tus emociones.</h4>
                      </div>
                    </div>
               </div>
           </div>
                </section>
            
            <div class="botonvideos"><a href="">
            Ver más
            </a></div>
        

    </div>     
</div>         

    
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
       </div>     
   </section>

</body>

</html>