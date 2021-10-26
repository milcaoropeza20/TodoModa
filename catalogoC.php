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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <!--meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <Insersion de framework Bootstrap version 5.1.1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"-->

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
                            <a href="novedadesC.php" class="nav-link active" aria-current="page">Novedades</a>
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
        <div id="carrusel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <!--CAPTIONS-->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carrusel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carrusel" data-bs-slide-to="1"  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carrusel" data-bs-slide-to="2"  aria-label="Slide 3"></button>
            </div>
            <!--INTERIOR DEL CARRUSEL-->
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <img src="imagenes/1.jpg" class="d-block w-100 img-fluid" alt="reluciente">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Luce reluciente</h5>
                        <p>Las mejores prendas solo para ti</p>
                    </div>
                </div>
                <!--ITEMS-->
                <div class="carousel-item">
                    <img src="imagenes/2.jpg" class="d-block w-100 img-fluid" alt="eleccion">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Elige</h5>
                        <p>Todo para tus gustos</p>
                    </div>
                </div>
                <!--ITEMS-->
                <div class="carousel-item">
                    <img src="imagenes/3.jpg" class="d-block w-100 img-fluid" alt="tuestilo">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Estilo</h5>
                        <p>Es lo que tu decidas</p>
                    </div>
                </div>
                </div>
            </div>
            <!--BOTONES DE CONTROL-->
            <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiene</span>
            </button>
        </div>
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