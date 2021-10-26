<?php include('includes\header.php'); ?>

<body>
    <!--Barra de navegación-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><h3>Todo Moda</h3></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav d-flex align-items-right">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" aria-current="page">Catalogo</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link" aria-current="page">Nosotros</a>
                        </li>
                    </ul>
                </div>
                <a href="opcLogin.php" ><button type="button" class="btn btn-outline-primary me-2">Iniciar sesión</button></a>
                <a href="signin.php" ><button type="button" class="btn btn-primary">Crear cuenta</button></a>
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
                    <img src="imagenes/freestocks-_3Q3tsJ01nc-unsplash.jpg" class="d-block w-100 img-fluid" alt="reluciente">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Luce reluciente</h5>
                        <p>Las mejores prendas solo para ti</p>
                    </div>
                </div>
                <!--ITEMS-->
                <div class="carousel-item">
                    <img src="imagenes/duy-hoang-ojZ4wJNUM5w-unsplash.jpg" class="d-block w-100 img-fluid" alt="eleccion">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Elige</h5>
                        <p>Todo para tus gustos</p>
                    </div>
                </div>
                <!--ITEMS-->
                <div class="carousel-item">
                    <img src="imagenes/brooke-cagle-z1B9f48F5dc-unsplash.jpg" class="d-block w-100 img-fluid" alt="tuestilo">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Estilo</h5>
                        <p>Es lo que tu decidas</p>
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

</body>
   <?php include('includes\footer.php');?>
</html>