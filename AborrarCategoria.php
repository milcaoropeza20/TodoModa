<?php
    include("db/db.php");
    $alert='';
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM categoria WHERE id_categoria = $id";
        $resultado = mysqli_query($conex, $query);
        if(!$resultado) {
            $alert='No se logró borrar la categoría';    
        }
        else{
            $alert='Se borró correctamente el artículo';
            header("location: Acategoria.php");
        }
        
    }

?>