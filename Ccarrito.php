<?php 
    include('includes\header.php');
    include('session\valuesession.php');
    ?>
    <!--HEADER-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-2">
            <div class="container">
                <a class="navbar-brand mx-5" href="principalC.php"><h3 class="h3">Todo Moda</h3></a>
            </div>
            <div class="container justify-content-end">
                <a href="Ccatalogo.php" class="navbar-link mx-4 text-muted text-decoration-none">
                    Seguir comprando
                    <i class="bi bi-arrow-right-circle-fill ms-2"></i>
                </a>
            </div>
        </nav>
    </header>
    <!--CARRITO VACIO-->
    <div class="container-md">
        <!--CONTENDOR IMAGEN-->
        <div class="container-md">
            <img src="imagenes/undraw_Add_to_cart_re_wrdo.png" alt="carrito vacio" class="img-fluid">
        </div>
        <!--MENSAJE DE CARRITO VACIO-->
        <div class="container-md">
            <h1 class="display-5 text-center">¡Sin articulos en el carrito!</h1>
            <p class="text-center text-secondary">Agrega articulos desde la nuestro catalogo</p>
        </div>
    </div>
    <!--CARRITO LLENO-->
    <div class="container-fluid px-4">
        <h3 class="display-6 mx-4">Articulos en el carrito</h3>
        <hr>
        <div class="row">
            <!--CONTENEDOR DE ARTICULOS-->
            <div class="col-7 order-1 border-end border-bottom border-3 rounded-3">

            </div>
            <!--MUESTRA DE PAGO-->
            <div class="col-5 order-2 border-end border-bottom border-3 rounded-3 ps-1">
                <h1 class="h2 py-2 px-2">Total</h1>
                <!--SUBTOTAL CAMPO-->
                <div class="container">
                    <p class="h4">Subtotal</p>
                </div>
                <!--DESCUENTO CAMPO-->
                <div class="container">
                    <p class="h4">Descuento</p>
                </div>
                <hr>
                <div class="container">
                    <p class="h4">Total (I.V.A. Incluido)</p>
                    <div class="d-grid">
                        <a href="#" class="btn btn-danger rounded-3 my-4" role="button">Pagar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php include('includes\footer.php');
?>
