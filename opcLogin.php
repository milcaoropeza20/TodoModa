<?php 
    include("db\db.php");
    include('includes\header.php');
?>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top justify-content-center">
            <div class="container-fluid ">
                <a class="navbar-brand" href="index.php"><h3>Todo Moda</h3></a>
            </div>
        </nav>
    </header>
    <form action="" method="POST">
        <br><br>
        <div class="container text-center px-5 my-5 ">
            <h1 class="h1 pt-2 pt-4">Iniciar sesión</h1>
            <small class="text-muted">Selecciona el tipo de usuario</small>
            <div class="form-floating my-3">
                <a href="login.php" ><button type="button" class="btn btn-outline-primary me-2">Iniciar como administrador</button></a>
                <a href="loginC.php" ><button type="button" class="btn btn-outline-primary me-2">Iniciar como cliente</button></a>
            </div>
        </div>
    </form> 
    </body><br><br><br><br><br><br><br><br><br><br><br>
   <?php include('includes\footer.php');?>
</html>
