<?php
    include("db/db.php");
    $alert='';
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM prenda WHERE id_prenda = $id";
        $resultado = mysqli_query($conex, $query);
        if(!$resultado) {
            $alert='No se logró borrar el artículo';    
        }
        else{
            $alert='Se borró correctamente el artículo';
            header("location: Aprendas.php");
        }
        
    }

?>