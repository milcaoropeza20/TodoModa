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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Insersion de framework Bootstrap version 5.1.1-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Todo Moda</title>
</head>
<body>
    <!--Barra de navegación-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="principalC.php"><h3>Todo Moda</h3></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav d-flex align-items-right">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">Novedades</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" aria-current="page">Jeans</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link" aria-current="page">Playeras</a>
                        </li>
                        <li>
                            <a href="session\logout.php" class="nav-link" aria-current="page">Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="cotainer">

        
    </div>
    <br>
    <!--PIE DE PAGINA-->
    <div class="container-fluid">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 ">Contacto</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 ">Nosotros</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 ">Catalogo</a></li>
            </ul>
            <p class="text-muted text-center">Todo Moda</p>
        </footer>
    </div>
    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>