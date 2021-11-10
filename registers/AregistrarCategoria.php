<?php
include("db/db.php");
$alert='';
if(isset($_POST['guardar']))//aqui va a ir la validacion
{
    $nombre = $_POST['nombre'];
    $detalles = $_POST['detalles'];

    $query = "INSERT INTO categoria( nombre,detalles) 
    VALUES ('$nombre','$detalles')";
    

    $resultado = mysqli_query($conex,$query);
    if(!$resultado)
    {
        $alert='No se realizo el registro';
    }
    else 
    {
        $alert='Registro exitoso';
    }
}
?>