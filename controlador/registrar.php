<?php
include "../modelo/DB/config.php";
include "../modelo/DB/dataBase.php";
$db=new DataBase();
if(isset($_POST['enviar']))
    {
        $nombre=mysqli_real_escape_string($db->link,$_POST['nombres']);
        $apaterno=mysqli_real_escape_string($db->link,$_POST['apaterno']);
        $amaterno=mysqli_real_escape_string($db->link,$_POST['amaterno']);
        $celular=mysqli_real_escape_string($db->link,$_POST['celular']);
        $direccion=mysqli_real_escape_string($db->link,$_POST['direccion']);
        $email=mysqli_real_escape_string($db->link,$_POST['email']);
        $serfav=mysqli_real_escape_string($db->link,$_POST['serfav']);
        $juefav=mysqli_real_escape_string($db->link,$_POST['juefav']);
        $depfav=mysqli_real_escape_string($db->link,$_POST['depfav']);
        $comfav=mysqli_real_escape_string($db->link,$_POST['comfav']);
        $apodo=mysqli_real_escape_string($db->link,$_POST['apodo']);
        if($nombre=="" || $apaterno==""||$amaterno==""||$celular=="" ||$direccion==""
        || $email==""||$serfav==""||$juefav=="" || $depfav==""||$comfav==""||$apodo=="")               
        {
            header("Location:../vista/public/llenado.php?msg=Debe llenar todos los campos!!!");
        }
        else
        {
            $query="INSERT INTO tbamistades(apellido_paterno, apellido_materno, nombres, celular,
                                            direccion,email, serie_favorita, videojuego_favorito, 
                                            deporte_favorito, comida_favorita, apodo)
                    VALUES ('$nombre','$apaterno', '$amaterno', '$celular', '$direccion', '$email', '$serfav', '$juefav', '$depfav', '$comfav', '$apodo')";
            $create = $db->registerUser($query); 
            header("Location:../vista/public/resultado.php");
        }
    }
?> 