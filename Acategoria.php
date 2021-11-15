<?php 
    include("db/db.php");
    include("includes/nav.php");
    include("registers/AregistrarCategoria.php");?>


<div class="container p-4">
    <br><br>
    <h1>Registrar categorias</h1><br>
    <div class ="row">

        <div class ="col-md-4">
            <div class="card card-body">
                <form action ="#" method ="POST">
                    <div class =form-group>
                        <input type="text" name ="nombre" class="form-control" placeholder="Nombre de de la categoria" autofocus minlength="4" maxlength="30" required>
                    </div><br>
                    <div class =form-group>
                        <textarea name ="detalles"  row=2 class="form-control"
                        placeholder="Detalles de la categoria" autofocus minlength="3" maxlength="50" required></textarea>
                    </div><br>
                    <br>
                    <div class="d-grid">
                        <div class ="alert" style="color:black"><?php echo isset($alert) ? $alert:''; ?></div>
                    </div>
                    <input type="submit" class ="btn btn-danger rounded-3 my-4" name ="guardar" value ="Guardar">
                </form>
            </div>
        </div>

        <div class ="col-md-8">

            <table class ="table table-bordered">
                <thead>
                <tr>
                    <th> ID </th>
                    <th> Nombre </th>
                    <th> Detalles </th>
                    <th> Acciones </th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    /* Seleccionamos todos los datos de la tabla producto a traves de la consulta select*/
                        $query ="SELECT *FROM categoria";
                    /*Generamos una variable donde le mandamos la conecion extablecida y la consulta devolviendo todas los productos guardados*/
                        $resultado_productos = mysqli_query($conex,$query);
                    /* Para poder mostrar los datos nos apoyamos de while para ir recorriendo estos datos y poderlos mostrar */
                        while($row = mysqli_fetch_assoc($resultado_productos)){ ?>
                            <tr>
                                <td> <?php echo $row['id_categoria'] ?> </td>
                                <td> <?php echo $row['nombre'] ?> </td>
                                <td> <?php echo $row['detalles'] ?> </td>
                                <td> 
                                &nbsp;
                                <a href="Aborrarcategoria.php?id=<?php echo $row['id_categoria']?>" class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                                </a>
                                &nbsp; 
                                <a href="Aeditarcategoria.php?id=<?php echo $row['id_categoria']?>" class="btn btn-primary">
                                    <i class="bi bi-pencil"></i>                                
                                </a>
                                &nbsp;
                                <a  href="Avercategoria.php?id=<?php echo $row['id_categoria']?>" class="btn btn-secondary">
                                    <i class="bi bi-eye"></i>
                                </a>
                                </td>
                            </tr>
                                
                        <?php } ?>
                </tbody>
            </table>
        
        </div>

    </div>

</div>

<?php include("includes/footer.php") ?>
