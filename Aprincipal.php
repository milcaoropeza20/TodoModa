<?php

include('includes\nav.php');

?>

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
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
    <br>
    
</body>
<?php include('includes\footer.php');?>
</html>