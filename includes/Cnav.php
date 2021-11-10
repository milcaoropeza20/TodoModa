
<?php
include('includes\header.php');
include('session\valuesession.php');

?>
<body>
    <!--Barra de navegación-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="Cprincipal.php"><h3>Todo Moda</h3></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav d-flex align-items-right">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="Ccatalogo.php" class="nav-link" aria-current="page">Catalogo</a>
                        </li>
                        <li>
                            <a href="Ccarrito.php" class="nav-link" aria-current="page">Mi Carrito</a>
                        </li>
                        <li>
                            <a href="session\logout.php" class="nav-link" aria-current="page">Cerrar Sesion</a>
                        </li>
                    </ul>
                    
                </div>
                <a class="navbar-brand"><h3>Bienvenido</h3></a>
            </div>
            </div>
        </nav>
    </header>