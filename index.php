<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Curso de php desde cero para segundo año">
    <meta name="keywords" content="introduccion al lenguaje php">
    <meta name="author" content="gutierrez quintana juan diego">
    <title>Examen</title>
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="vista/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vista/assets/css/index.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-light " id="hero" >
      <div class="container-fluid">
        <button class="navbar-toggler my-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">          
          <ul class="navbar-nav">          
            <li class="nav-item">
              <a class="btn btn-outline-info me-2 my-1" style="width: 85px;" href="vista/public/llenado.php">Registrar Amistad</a>
            </li>
            <li class="nav-item">   
              <a class="btn btn-outline-info me-2 my-1" style="width: 85px;" href="#carusel">Carrusel</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-info me-2 my-1" style="width: 85px;" href="#galeria">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-info me-2 my-1" style="width: 85px;" href="vista/public/docentesMaterias.php" >Materias-Docentes</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-info me-2 my-1" style="width: 85px;"href="index.php" >Salir</a>
            </li>
          </ul>          
        </div>
      </div>
    </nav>
</header>
    <br>
    <main>
        <section class="container row">
            <div class="col-lg-5 col-md-5 col-sm-12 h-100 p-5 bg-light border rounded-3 izqSup" >               
                <h2>FORTALEZAS</h2>
                <p>Soy una persona muy solitaria pero atenta, diria que una de mis fortalezas es que me acostmbre a la soledad.\nPor esa razon no hago amigos facilmente. Otra de mis fortalezas seria que soy una persoan que aprende muy rapido.</p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 h-100 p-5 bg-light border rounded-3 derSup" >               
                <h2>DEBILIDADES</h2>
                <p>Una de mis debilidades diria que es el relcionarme con otras personas, soy muy sincero y eso no les agradaa las personas, por esa razon evitan hacer una maistas conmigo.</p>
            </div>
            <div class=" col-lg-2 col-md-2 col-sm-12" >
                <figure  class="figure" >
                    <img class="bd-placeholder-img rounded-circle" width="350" height="350" src="vista/assets/img/galeria/foto - copia.jpg" alt="">
                </figure>
            </div>
        </section>
        <br>
        <section class="row" id="carusel">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="vista/assets/img/galeria/trabajo2.jpg" width="100%" height="100%" alt="">
                    <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>HACIENDO MSI TARES</h1>
                        <p>Como todos los dias aqui haciendo msi tareas, hasta que queden perfectas...</p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">               
                    <img src="vista/assets/img/galeria/familia2.jpg" width="100%" height="100%" alt="">
                    <div class="container">
                    <div class="carousel-caption">
                        <h1>CONVIVIENDO CON MI FAMILIA</h1>
                        <p>Siempre debemos tener tiempo para pasarlo con la familia...</p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="vista/assets/img/galeria/anime.jpg" width="100%" height="100%" alt="">
                    <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>TOMANDO UN PEQUEÑO DESCANSO</h1>
                        <p>Cunado las cosas no salen bien o salen demasiado bien, me tomo un pequeño descanso</p>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <section class="row" id="galeria" >
            <div class="album py-5">
                <div class="container">
                    <h1 class="text-center fw-bold text-light" style="padding-bottom:4rem ;" >GALERIA</h1>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col" >
                            <div class="card shadow-sm">
                                <img src="vista/assets/img/galeria/anime.jpg" alt=""width="100%" height="225" >
                                <div class="card-body bg-light" >
                                    <p class="card-text">Pasando el rato viendo anime....</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">DESCANSANDO</small>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="vista/assets/img/galeria/itmqsc3.jpg" alt=""width="100%" height="225" >

                                <div class="card-body bg-light " >
                                    <p class="card-text">Fui a la feria..</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">En la feria</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="vista/assets/img/galeria/familia3.jpg" alt=""width="100%" height="225" >
                                <div class="card-body bg-light ">
                                    <p class="card-text">Comiendo en familia</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">Almorzando</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="vista/assets/img/galeria/lectura.jpg" alt=""width="100%" height="225" >
                                <div class="card-body bg-light ">
                                    <p class="card-text">Leyendo un poco...</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">Lectura</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                            <img src="vista/assets/img/galeria/familia2.jpg" alt=""width="100%" height="225" >
                                <div class="card-body bg-light ">
                                    <p class="card-text">En <familia class=""></familia></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">Familia</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                            <img src="vista/assets/img/galeria/itmqsc.jpg" alt=""width="100%" height="225" >
                                <div class="card-body gb-light ">
                                    <p class="card-text">Mi Instituto...</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">Instituto</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                            <img src="vista/assets/img/galeria/desayunando.jpg" alt=""width="100%" height="225" >

                                <div class="card-body bg-light ">
                                    <p class="card-text">Desayunando....</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">Mi desayuno</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                            <img src="vista/assets/img/galeria/trabajo2.jpg" alt=""width="100%" height="225" >

                                <div class="card-body bg-light ">
                                    <p class="card-text">Haciendo mi tarea...</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">Productivo como siempre</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                            <img src="vista/assets/img/galeria/feria.jpg" alt=""width="100%" height="225" >

                                <div class="card-body bg-light ">
                                    <p class="card-text">Con mi amigo...</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">Fui a otra feria</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <div class=" container d-grid gap-2 d-md-flex justify-content-md-end" style="padding:2rem;" >
            <a class="btn btn-outline-info btn-light me-md-2" type="button" href="#hero">Volver</a>
        </div>
</main> 
<script src="vista/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>