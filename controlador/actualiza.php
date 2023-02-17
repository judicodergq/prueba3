<?php
include "../modelo/DB/config.php";
include "../modelo/DB/dataBase.php";
$id=$_GET['id_amigo'];
$db= new DataBase();
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
        header('Location:../vista/public/actualizaPersonal.php?msg='.urlencode('Debe llenar todos los campos!!!').'&&id_amigo='.$id);
    }
    else
    {
        $query="UPDATE tbamistades SET apellido_paterno='$nombre', apellido_materno='$apaterno', nombres='$amaterno', celular ='$celular'
                                        , direccion ='$direccion', email  ='$email', serie_favorita ='$serfav'
                                        , videojuego_favorito ='$juefav', deporte_favorito ='$depfav'
                                        , comida_favorita ='$comfav', apodo ='$apodo' WHERE id_amigo='$id'";
        $update=$db->updatePersona($query);
    }
}
if(isset($_POST['delete']))
{
    $query="DELETE FROM tbamistades WHERE id_amigo=$id";
    $deleteData=$db->deletePersona($query);
}
?>