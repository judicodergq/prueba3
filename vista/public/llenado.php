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
<body  >
  <header>
    <nav class="navbar navbar-expand-lg bg-light " id="hero" >
      <div class="container-fluid">
        <button class="navbar-toggler my-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">          
          <ul class="navbar-nav">          
            <li class="nav-item">
              <a class="btn btn-outline-info me-2 my-1" style="width: 85px;" href="llenado.php">Registrar Amistad</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-info me-2 my-1" style="width: 85px;" href="../public/docentesMaterias.php" >Materias-Docentes</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-info me-2 my-1" style="width: 85px;"href="../../index.php" >Salir</a>
            </li>
          </ul>          
        </div>
      </div>
    </nav>
  </header>
    <br>
    <main>
        <section class="container row" style="margin-bottom: 3rem;" >
          <div class="col-lg-6 col-md-6 col-sm-12">
            <center>
              <figure  class="figure" >
                <img class="bd-placeholder-img rounded-circle" width="350" height="350" src="../assets/img/galeria/foto - copia.jpg" alt="">
              </figure>
              <br>
              <h3>AÑADIRE NUEVOS AMIGOS....</h3>
              <br>
              <a class="btn btn-outline-info btn-light me-md-2" type="button" href="../public/resultado.php">Ver Amigos</a>

            </center>             
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <form  method="post"  action="../../controlador/registrar.php" name="registro" id="registro" >
                    <?php 
                        if(isset($_GET['msg']))
                        {                 
                           echo "<center><div class='alert bg-primary'><span class='text-light' >".$_GET['msg']." </span></div></center>";                    
                           
                        }
                    ?>                     
                    <div>
                        <label for="">APELLIDO PATERNO</label>
                        <input name="apaterno" id="apaterno" type="text" class="form-control">
                    </div>
                    <div>
                        <label for="">APELLIDO MATERNO</label>
                        <input name="amaterno" id="amaterno" type="text" class="form-control">
                    </div>
                    <div>
                      <label for="">NOMBRE</label>
                      <input name="nombres" id="nombres" type="text" class="form-control">
                    </div>
                    <div>
                      <label for="">CELULAR</label>
                      <input name="celular" id="celular" type="number" class="form-control">
                    </div>
                    <div>
                      <label for="">DIRECCION</label>
                      <input name="direccion" id="direccion" type="text" class="form-control">
                    </div>
                    <div>
                      <label for="">EMAIL</label>
                      <input name="email" id="email" type="email" class="form-control">
                    </div>
                    <div>
                      <label for="">SERIE FAVORITA</label>
                      <input name="serfav" id="nomserfavbres" type="text" class="form-control">
                    </div>
                    <div>
                      <label for="">VIDEOJUEGO FAVORITO</label>
                      <input name="juefav" id="juefav" type="text" class="form-control">
                    </div>
                    <div>
                      <label for="">DEPORTE FAVORITO</label>
                      <input name="depfav" id="depfav" type="text" class="form-control">
                    </div>
                    <div>
                      <label for="">COMIDA FOVORITA</label>
                      <input name="comfav" id="comfav" type="text" class="form-control">
                    </div>
                    <div  style="margin-bottom: 2rem;"  >
                      <label for="">APODO</label>
                      <input name="apodo" id="apodo" type="text" class="form-control">
                    </div>
                    <center>
                        <button class="btn btn-outline-info btn-light me-md-2" type="submit" name="enviar" id="enviar" class="btn my-3">Enviar</button>
                        <a href="llenado.php" class="btn btn-outline-info btn-light me-md-2" type="button">Cancelar</a>
                        <a class="btn btn-outline-info btn-light me-md-2" type="button"  href="../../index.php">Inicio</a>
                    </center>
                </form>
              
            
          </div>       
        </section>
</main> 
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>