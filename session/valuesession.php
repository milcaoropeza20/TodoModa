<?php

session_start();
if(!isset($_SESSION['correo']))
{
    echo '
    <script> alert("Debes iniciar sesión primero");
    window.location = "index.php";
    </script>
    ';
    session_destroy();
    die;
}

?>