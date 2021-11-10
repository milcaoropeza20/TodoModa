<?php
include("db/db.php");
$alert='';
if(isset($_POST['guardar']))//aqui va a ir la validacion
{
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $talla = $_POST['talla'];
    $color = $_POST['color'];
    $preciop = $_POST['preciop'];
    $categoria = $_POST['categoria'];
   // $cantidad_inicial = $_POST['cantidad_inicial'];
    //$fecha_caducidad = $_POST['fecha_caducidad'];
    //$id_empleado = $_POST['id_empleado'];

    $query = "INSERT INTO prenda( talla, marca, color,nombre,precio_unitario ,id_categoria) 
    VALUES ('$talla','$marca','$color','$nombre','$preciop','$categoria')";
    

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