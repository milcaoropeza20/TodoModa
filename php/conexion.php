<?php
    $host = "localhost";
    $user = "root";
    $contraseña = "";
    $bd = "todomoda";
    $conectar = mysqli_connect($host, $user, $contraseña, $bd);
    mysqli_set_charset($conectar, 'utf-8');
?>