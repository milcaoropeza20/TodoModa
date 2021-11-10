<?php 
    include("db\db.php");
    include("session\signin_admin.php");
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


    <!--FORMS -->
    <br><br>
    <form action="" method="POST">
        <br><br>
        <div class="container text-center px-3 my-3 ">
        <form>
            <h1 class="h1 pt-2 pt-4">Registro de administrador</h1>
            <small class="text-muted">Ingrese sus datos en los siguientes campos para crear tu cuenta</small>
            <div class="form-floating my-3">
                <input type="text" class="form-control" id="inputEmail" name ="nombre" placeholder="Nombre" required="" autofocus>
                <label for="inputEmail">Nombre(s)</label>
            </div>
            <div class="form-floating my-3">
                <input type="text" class="form-control" id="inputEmail" name ="apellido" placeholder="Apellido" required="" autofocus>
                <label for="inputEmail">Apellido</label>
            </div>
            <div class="form-floating my-3">
                <input type="email" class="form-control" id="inputEmail" name ="correo" placeholder="Correo electronico" required="" autofocus>
                <label for="inputEmail">Correo electronico</label>
            </div>
            <div class="form-floating my-3 rounded-3">
                <input type="password" class="form-control" id="inputPassword" name ="contraseña" placeholder="Contraseña" required="" autofocus>
                <label for="inputPassword">Contraseña</label>
            </div>
            <div class="d-grid my-3 rounded-3">
                <button type="submit" class ="btn btn-outline-primary my-2" name ="guardarAdmin" value ="Crear Cuenta"> Crear cuenta </buttton>
                <!--button type="button" class="btn btn-outline-primary my-2" onclick="ingresar()">Iniciar sesión</button-->
            </div>
            <hr>
            <div class="d-grid">
                <div class ="alert" style="color:black"><?php echo isset($alert2) ? $alert2:''; ?><br><br></div>
            </div>
        </form>
    </div>
            <br><br>
            </form>
            <div class="container-fluid fixed-bottom">
        <footer class="py-2 my-2">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="index.html" class="nav-link px-2 ">Inicio</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 ">Contacto</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 ">Nosotros</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 ">Catalogo</a></li>
            </ul>
            <a href="index.html" class="text-muted text-center nav-link">
            <p>&copy Todo Moda</p></a>
        </footer>
    </div>
    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html> 