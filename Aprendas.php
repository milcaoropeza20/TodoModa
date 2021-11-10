<?php 
    include("db/db.php");
    include("includes/nav.php");
    include("registers/AregistrarPrenda.php");
    ?>


<div class="container p-4">
    <br><br>
    <h1>Registrar prendas</h1><br>
    <div class ="row">

        <div class ="col-md-4">
            <div class="card card-body">
                <form action ="#" method ="POST">
                    <div class =form-group>
                        <input type="text" name ="nombre" class="form-control" placeholder="Nombre de de la prenda" autofocus minlength="4" maxlength="30" required>
                    </div><br>
                    <div class =form-group>
                        <input type="text" name ="marca" class="form-control"
                        placeholder="Marca de la prenda" autofocus minlength="3" maxlength="50" required>
                    </div><br>
                    <div class =form-group>
                        <input type="text" name ="color" class="form-control" placeholder="Colores" autofocus minlength="4" maxlength="30" required>
                    </div><br>
                    <div class =form-group>
                        <input type="text" name ="talla" class="form-control" placeholder="Tallas autofocus minlength="4" maxlength="30" required>
                    </div><br>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class =form-group>
                                <input type="number" name ="preciop" class="form-control"
                                placeholder="Precio por pieza" min = "1" max ="10000" autofocus>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class =form-group>
                                <input type="number" name ="cantidad_inicial" class="form-control"
                                placeholder="Cantidad inicial" min = "1" max ="1000" autofocus required>
                            </div>
                        </div>  
                    </div>  <br>
                    <div class =form-group>
                        <input type="number" name ="categoria" class="form-control"
                        placeholder="Categoria" autofocus minlength="1" maxlength="50" required>
                    </div><br>
                    <div class =form-group>
                        <input type="number" name ="id_empleado" class="form-control"
                        placeholder="Empleado que registro el producto" min = "1" max ="50" autofocus>
                    </div>
                    <br>
                    <div class="d-grid">
                        <div class ="alert" style="color:black"><?php echo isset($alert) ? $alert:''; ?></div>
                    </div>
                    <input type="submit" class ="btn btn-success btn-block bg-azulf" name ="guardar" value ="Guardar">
                </form>
            </div>
        </div>

        <div class ="col-md-8">

            <table class ="table table-bordered">
                <thead>
                <tr>
                    <th> ID </th>
                    <th> Marca </th>
                    <th> Nombre </th>
                    <th> Precio unitario </th>
                    <!--th> Fecha de registro </th-->
                    <th> Acciones </th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    /* Seleccionamos todos los datos de la tabla producto a traves de la consulta select*/
                        $query ="SELECT *FROM prenda";
                    /*Generamos una variable donde le mandamos la conecion extablecida y la consulta devolviendo todas los productos guardados*/
                        $resultado_productos = mysqli_query($conex,$query);
                    /* Para poder mostrar los datos nos apoyamos de while para ir recorriendo estos datos y poderlos mostrar */
                        while($row = mysqli_fetch_assoc($resultado_productos)){ ?>
                            <tr>
                                <td> <?php echo $row['id_prenda'] ?> </td>
                                <td> <?php echo $row['marca'] ?> </td>
                                <td> <?php echo $row['nombre'] ?> </td>
                                <td> <?php echo $row['precio_unitario'] ?> </td>
                                <td> 
                                &nbsp;
                                <a href="AborrarPrenda.php?id=<?php echo $row['id_prenda']?>" class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                                </a>
                                &nbsp; 
                                <a href="editarPrenda.php?id=<?php echo $row['id_prenda']?>" class="btn btn-primary">
                                    <i class="bi bi-pencil"></i>                                
                                </a>
                                &nbsp;
                                <a  href="verPrenda.php?id=<?php echo $row['id_prenda']?>" class="btn btn-secondary">
                                    <i class="bi bi-eye"></i>
                                </a>
                                &nbsp;
                                <a href="entrada.php?id=<?php echo $row['id_prenda']?>" class="btn btn-success">
                                <i class="bi bi-plus"></i> </a>&nbsp;
                                <a href="salida.php?id=<?php echo $row['id_prenda']?>" class="btn btn-success">
                                <i class="bi bi-dash"></i> </a>
                                </td>
                            </tr>
                                
                        <?php } ?>
                </tbody>
            </table>
        
        </div>

    </div>

</div>

<?php include("includes/footer.php") ?>
