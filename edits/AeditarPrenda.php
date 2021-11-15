<?php
include("db/db.php");
$talla= '';
$preciop ='';
$color ='';
$alert='';
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM prenda WHERE id_prenda=$id";
  $resultado = mysqli_query($conex, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $talla = $row['talla'];
    $preciop = $row['precio_unitario'];
    $color= $row['color'];
  }
}

if (isset($_POST['actualizar'])) {//aqui va a ir la validacion
  $id = $_GET['id'];
  $talla = $_POST['talla'];
  $preciop =  $_POST['preciop'];
  $color =  $_POST['color'];

  $query = "UPDATE prenda set talla = '$talla',precio_unitario ='$preciop',color ='$color' WHERE id_prenda='$id'";
  $resultado=mysqli_query($conex, $query);
 
  if(!$resultado)
  {
      $alert='No se realizo el registro';
      header("location: Aprendas.php");
  }
  else 
  {
      $alert='Registro exitoso';
      header("location: Aprendas.php");
  }
}

?>