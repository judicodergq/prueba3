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
<?php
include "../../modelo/DB/config.php";
include "../../modelo/DB/dataBase.php";
$db=new DataBase();

$query="SELECT * FROM tbamistades";
$read=$db->select($query);
 ?>
 <main>
    <div class="col-12 bg-secondary bg-opacity-25 p-5 rounded" style="margin-bottom: 4rem ;" >
        <h2 class="display-6 text-primary text-center mb-3 tex-uppercase fw-bold" >Lista de Amigos</h2>
        <?php
            /*if(isset($_GET['msg']))
            {
                echo "<center><div class='alert' style='background-color:rgb(59,85,64);'><span style='color: rgb(252,255,147);' >".$_GET['msg']." </span></div></center>";                    
            }  */   
        ?>
        <table class="table table-hover table-striped bg-light" id=tabla >
            <thead>
                <tr>
                    <th scope="col" >id_persona</th>
                    <th scope="col" >Apellido_Paterno</th>
                    <th scope="col" >Apellido Materno</th>
                    <th scope="col" >Nombres</th>                
                    <th scope="col" >Celular</th>                
                    <th scope="col" >Direccion</th>                
                    <th scope="col" >Email</th>                
                    <th scope="col" >Serie Favorita</th>                
                    <th scope="col" >Juego_Favorito</th>                
                    <th scope="col" >Deporte Favorito</th>                
                    <th scope="col" >Comida Favorita</th>                
                    <th scope="col" >Apodo</th>                
                    <th scope="col" >Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($read as $row){?> 
                <tr>
                    <td><?php echo $row['id_amigo'];?></td>
                    <td><?php echo $row['apellido_paterno'];?></td>
                    <td><?php echo $row['apellido_materno'];?></td>
                    <td><?php echo $row['nombres'];?></td> 
                    <td><?php echo $row['celular'];?></td> 
                    <td><?php echo $row['direccion'];?></td>
                    <td><?php echo $row['email'];?></td> 
                    <td><?php echo $row['serie_favorita'];?></td> 
                    <td><?php echo $row['videojuego_favorito'];?></td> 
                    <td><?php echo $row['deporte_favorito'];?></td> 
                    <td><?php echo $row['comida_favorita'];?></td> 
                    <td><?php echo $row['apodo'];?></td> 

                    <td><a href="actualizaPersonal.php?id_amigo=<?php echo urlencode($row['id_amigo']);?>"class="btn btn-primary btn-sm" >Editar </a></td>

                <?php }
                ?> 
                </tr>
            </tbody>      

        </table>
    </div>
<center>
<a class="btn btn-outline-info btn-light md-2" type="button" href="../public/llenado.php">Volver</a>

</center>

</main>
<script  src="../assets/bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>
