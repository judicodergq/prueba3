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
              <a class="btn btn-outline-info me-2 my-1" style="width: 85px;"href="index.php" >Salir</a>
            </li>
          </ul>          
        </div>
      </div>
    </nav>
  </header>
    <br>
<?php  
 include "../../modelo/DB/config.php";
 include "../../modelo/DB/dataBase.php";
 $getData="";
 if(isset($_GET['id_amigo']))
 {
    $id=$_GET['id_amigo'];
    $db= new DataBase();
    $query="SELECT * FROM tbamistades WHERE id_amigo=$id";
    $getData=$db->select($query)->Fetch_assoc();
 }
?>
<div class="col-lg-12 col-md-12 col-sm-12 container">  
    <center>
    <form  method="post"  action="../../controlador/actualiza.php?id_amigo=<?php echo $id;?>" name="registro" id="registro" class="form" style="width:650px;" style="min-width:50px;" >
    <?php 
           if(isset($_GET['msg']))
           {                                   
            echo "<center><div class='alert bg-primary'><span class='text-light' >".$_GET['msg']." </span></div></center>";                    
           }
        ?> 
        <div>                          
            <label for="text-uppercase">APELLIDO PATERNO</label>
            <input value="<?php echo $getData['apellido_paterno'] ;?>" name="apaterno" id="apaterno" type="text" class="form-control">
        </div>
        <div>
            <label for="text-uppercase">PELLIDO MATERNO</label>
            <input value="<?php echo $getData['apellido_materno']; ?>" name="amaterno" id="amaterno" type="text" class="form-control">
        </div>
        <div>
            <label for="text-uppercase">NOMBRES</label>
            <input value="<?php echo $getData['nombres']; ?>" name="nombres" id="nombres" type="text" class="form-control">
        </div>
        <div>
            <label class="text-uppercase" for="">CELULaR </label>
            <input value="<?php echo $getData['celular']; ?>" name="celular" id="celular" type="number" class="form-control">
        </div>
        <div>
            <label class="text-uppercase" for="">direccion </label>
            <input value="<?php echo $getData['direccion']; ?>" name="direccion" id="direccion" type="text" class="form-control">
        </div>
        <div>
            <label class="text-uppercase" for="">email </label>
            <input value="<?php echo $getData['email']; ?>" name="email" id="email" type="email" class="form-control">
        </div>
        <div>
            <label class="text-uppercase" for="">serie favorita </label>
            <input value="<?php echo $getData['serie_favorita']; ?>" name="serfav" id="serfav" type="text" class="form-control">
        </div>
        <div>
            <label class="text-uppercase" for="">video juego favorito </label>
            <input value="<?php echo $getData['videojuego_favorito']; ?>" name="juefav" id="juefav" type="text" class="form-control">
        </div>
        <div>
            <label class="text-uppercase" for="">deporte favorito </label>
            <input value="<?php echo $getData['deporte_favorito']; ?>" name="depfav" id="depfav" type="text" class="form-control">
        </div>
        <div>
            <label class="text-uppercase" for="">comida favorita </label>
            <input value="<?php echo $getData['comida_favorita']; ?>" name="comfav" id="comidafav" type="text" class="form-control">
        </div>
        <div style="margin-bottom: 2rem ;" >
            <label class="text-uppercase" for="">apodo </label>
            <input value="<?php echo $getData['apodo']; ?>" name="apodo" id="apodo" type="text" class="form-control">
        </div>
        
        <center>
            <button type="submit" name="enviar" id="enviar" class="btn btn-light btn-outline-info md-2">Editar</button>
            <button type="submit" name="delete" id="delete" class="btn btn-light btn-outline-primary md-2">Eliminar</button> <br>
            <a style="margin-top: 0.5rem ;"  href="resultado.php" class="btn btn-outline-info btn-light md-2" >cancelar</a>
        </center>
    </form>

    </center>  
    
</div>
<!--<script src="vista/assets/js/validarCrud2.js"></script>-->  
</body>
</html>