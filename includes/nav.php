<?php
include('includes\header.php');
include('session\valuesession.php');

?>

<body>
    <!--Barra de navegación-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="Aprincipal.php"><h3>Todo Moda</h3></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav d-flex align-items-right">
                        <li class="nav-item">
                            <a href="Aprincipal.php" class="nav-link active" aria-current="page">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="Acategoria.php" class="nav-link" aria-current="page">Categoria</a>
                        </li>
                        <li>
                            <a href="Aprendas.php" class="nav-link" aria-current="page">Prendas</a>
                        </li>
                        <li>
                            <a href="Adetalles.php" class="nav-link" aria-current="page">Detalles ventas</a>
                        </li>
                        <li>
                            <a href="Astock.php" class="nav-link" aria-current="page">Ver stock</a>
                        </li>
                        <li>
                            <a href="Acliente.php" class="nav-link" aria-current="page">Visualización de clientes</a>
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
