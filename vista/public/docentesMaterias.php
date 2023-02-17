<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Curso de php desde cero para segundo año">
    <meta name="keywords" content="introduccion al lenguaje php">
    <meta name="author" content="gutierrez quintana juan diego">
    <title>Examen</title>
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/index.css">  
    
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-light " >
      <div class="container-fluid">
        <button class="navbar-toggler my-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">          
          <ul class="navbar-nav">          
            <li class="nav-item">
              <a class="btn btn-outline-info me-2 my-1" style="width: 85px;" href="../public/llenado.php">Registrar Amistad</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-info me-2 my-1" style="width: 85px;" href="docentesMaterias.php" >Materias-Docentes</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-info me-2 my-1" style="width: 85px;"href="../../index.php" >Salir</a>
            </li>
          </ul>          
        </div>
      </div>
    </nav>
</header>

    <main >
        <section class="row">
            <h1 class="text-center fw-bold text-light" >MATERIAS</h1>
            <div class="album py-5">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="../assets/img/galeria/BASE DE DATOS.jpeg" width="100%" height="225" alt="">
                                <div class="card-body">
                                    <p class="card-text">BASE DE DATOS</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-info" style="width:100px ;" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                            info
                                            </button>                                       
                                        </div>
                                        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel1">BASE DE DATOS</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Una base de datos es una recopilación organizada de información o datos estructurados, que normalmente se almacena de forma electrónica en un sistema informático. Normalmente, una base de datos está controlada por un sistema de gestión de bases de datos (DBMS). En conjunto, los datos y el DBMS, junto con las aplicaciones asociadas a ellos, reciben el nombre de sistema de bases de datos, abreviado normalmente a simplemente base de datos.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="text-muted">BASE DE DATOS</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                            <img src="../assets/img/galeria/PROGRAMACION.jpeg" width="100%" height="225" alt="">

                                <div class="card-body">
                                    <p class="card-text">PROGRAMACION</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                            <button type="button" class="btn btn-outline-info" style="width:100px ;" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                            info
                                            </button>                                       
                                        </div>
                                        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel2">PROGRAMACION</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>La programación informática es el arte del proceso por el cual se limpia, codifica, traza y protege el código fuente de programas computacionales, en otras palabras, es indicarle a la computadora lo que tiene que hacer. 
                                                                    La programación informática es una de las habilidades esenciales que aprendes cuando estudias informática.Detrás de todos los programas informáticos que conocemos y usamos de manera cotidiana para facilitarnos diversas actividades de nuestro día con día, existe todo un proceso para poderlos crear. Este proceso es conocido como programación, conozcamos un poco más sobre lo que conlleva este proceso.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="text-muted">PROGRAMACION</small>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                            <img src="../assets/img/galeria/ESTRUCTURA DE DATOS.jpeg" width="100%" height="225" alt="">

                                <div class="card-body">
                                    <p class="card-text">ESTRUCTURA DE DATOS</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                            <button type="button" class="btn btn-outline-info" style="width:100px ;" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                                            info
                                            </button>                                       
                                        </div>
                                        <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel3">ESTRUCTURA DE DATOS</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Una estructura de datos es una forma de organizar los datos para que puedan ser utilizados de manera eficiente. Hay muchos tipos diferentes de estructuras de datos, cada uno con sus propias fortalezas y debilidades.
                                                             Algunos de los tipos de estructuras de datos más comunes incluyen arrays, listas enlazadas, pilas y colas. Cada una de estas estructuras de datos tiene su propia manera de organizar los datos, y cada una tiene su propio conjunto de ventajas y desventajas.
                                                                Las matrices son una de las estructuras de datos más comunes. Son fáciles de usar y entender, y son muy eficientes para ciertas operaciones. Sin embargo, no son adecuadas para todas las situaciones. </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="text-muted">ESTRUCTURA DE DATOS</small>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                            <img src="../assets/img/galeria/PROGRAMACIONMOVIL.jpeg" width="100%" height="225" alt="">

                                <div class="card-body">
                                    <p class="card-text">Programacion para dispositivos moviles</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                            <button type="button" class="btn btn-outline-info" style="width:100px ;" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                                            info
                                            </button>                                       
                                        </div>
                                        <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel4" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel4">PDM</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Programación Movil es desarrollar aplicaciones para aparatos como celulares, smartphones, PDA's, PocketPC's y dispositivos con recursos limitados. Hay que ser claros con la diferencia entre Programación Movil y Programación Embebida, que son cosas parecidas (recursos limitados) pero distintas en esencia. 
                                                                    Sistemas Operativos para moviles están Symbian, Palm OS y Windows Mobile; así como una versión de Linux. </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="text-muted">PDM</small>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                            <img src="../assets/img/galeria/DISEÑOWEB.jpeg" width="100%" height="225" alt="">

                                <div class="card-body">
                                    <p class="card-text">DISEÑO Y PROGRAMACION  WEB </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                            <button type="button" class="btn btn-outline-info" style="width:100px ;"  data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
                                            info
                                            </button>                                       
                                        </div>
                                        <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel5" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel5">DPW</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>La programación web es una de las disciplinas cuyo desarrollo se ha impulsado más en los últimos años. La demanda de profesionales formados en este ámbito no hace más que crecer y crecer… y debido a la digitalización y el desarrollo de nuevas tecnologías, esta tendencia solo seguirá creciendo. Por eso, estudiar un máster en programación web como el que ofrecemos en Escuela Fintech te dotará de los conocimientos básicos necesarios para empezar en en el sector de la informática. Ahora, veamos en qué consiste la programación web y qué funciones realiza un desarrollador de páginas web.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="text-muted">DISEÑO WEB</small>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                            <img src="../assets/img/galeria/REDES.jpeg" width="100%" height="225" alt="">

                                 <div class="card-body">
                                    <p class="card-text">REDES</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                            <button type="button" class="btn btn-outline-info" style="width:100px ;"  data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
                                            info
                                            </button>                                       
                                        </div>
                                        <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel6" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel6">REDES</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Una red informática tiene varias finalidades, la principal de ellas es permitir que ordenadores y dispositivos puedan conectarse y realizar un intercambio de información, e incluso compartir datos. Algunas de las funciones de las redes informáticas que tenés que conocer son:

                                                                Realizar un intercambio de información
                                                            Es la función principal de estas redes. Un ordenador puede intercambiar datos con otro de manera rápida y segura, de esta forma dichos archivos podrán ser visualizados y editados por otros usuarios como vos.

                                                                Compartir Software
                                                            Otra de las funciones de estas redes es permitir la instalación de un programa dentro de un solo ordenador, que podrá ser utilizado por el resto de los equipos de la red sin que ellos tengan que instalarlo.

                                                                Compartir Hardware
                                                            Una de las mejores funciones, ya que si tenés una impresora o un Router ADSL, podés compartirla con el resto de los ordenadores de tu red.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="text-muted">REDES</small>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
        <section class="row">
            <h1 class="text-center fw-bold text-light" >DOCENTES</h1>
            <div class="album py-5">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="../assets/img/galeria/ROGELIA CORONEL.jpg" width="100%" height="225" alt="">
                                <div class="card-body">
                                    <p class="card-text">CORONEL QUISPE ROGELIA</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-info" style="width:100px ;" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
                                            Porque...
                                            </button>                                       
                                        </div>
                                        <div class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel7" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel7">BASE DE DATOS</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p> es mi tercera materia en convertirse en una de mis favoritas y actualmente la N°1, y la docente siempre respondia a mis preguntas y haci mesacabade dudas.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="text-muted">BASE DE DATOS</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                            <img src="../assets/img/galeria/BUSTAMANTE.jpg" width="100%" height="225" alt="">

                                <div class="card-body">
                                    <p class="card-text">BUSTAMANTE PACO REINA SARINA</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                            <button type="button" class="btn btn-outline-info" style="width:100px ;" data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
                                            Porque...
                                            </button>                                       
                                        </div>
                                        <div class="modal fade" id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel8" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel8">PROGRAMACION</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>es mi primera materia en convertirse en mi materia favorita y actualmente la N°2, la lic. siempre fue paciente con nosotros y hasta ahora sigue siendo nuestra docente en la materia de programacion.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="text-muted">PROGRAMACION</small>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                            <img src="../assets/img/galeria/YOLANDA APAZA GUTIERREZ.jpg" width="100%" height="225" alt="">

                                <div class="card-body">
                                    <p class="card-text">APAZA GUTIERREZ YOLANDA</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                            <button type="button" class="btn btn-outline-info" style="width:100px ;" data-bs-toggle="modal" data-bs-target="#staticBackdrop9">
                                            Porque...
                                            </button>                                       
                                        </div>
                                        <div class="modal fade" id="staticBackdrop9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel9" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel9">ESTRUCTURA DE DATOS</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Al inicio de mi segundo se convirtio en una de mis 3 materias favoritas y actualmente la N°3, y la lic. fue una de las que mas tuvo paciecia debido a que mis compañeros tienen un aprendizaje lento, muy lento.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="text-muted">ESTRUCTURA DE DATOS</small>
                                    </div>
                                    </div>
                            </div>
                        </div>                         
                    </div>
                </div>
            </div>
        </section>
    </main>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
