<?php 
    include("db/db.php");
    include("includes/nav.php");
?>


<div class="container p-4">
    <br><br>
    <h1>Detalles de venta</h1><br>
    <div class ="row">
        <div class ="col-md-8">

            <table class ="table table-bordered">
                <thead>
                <tr>
                    <th> ID </th>
                    <th> Folio </th>
                    <th> ID prenda </th>
                    <th> Acciones </th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    /* Seleccionamos todos los datos de la tabla producto a traves de la consulta select*/
                        $query ="SELECT *FROM detalle_compra";
                    /*Generamos una variable donde le mandamos la conecion extablecida y la consulta devolviendo todas los productos guardados*/
                        $resultado_productos = mysqli_query($conex,$query);
                    /* Para poder mostrar los datos nos apoyamos de while para ir recorriendo estos datos y poderlos mostrar */
                        while($row = mysqli_fetch_assoc($resultado_productos)){ ?>
                            <tr>
                                <td> <?php echo $row['id'] ?> </td>
                                <td> <?php echo $row['folio'] ?> </td>
                                <td> <?php echo $row['id_prenda'] ?> </td>
                                <td> 
                                &nbsp;
                                <a href="borrarcategoria.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                                </a>
                                &nbsp; 
                                <a href="editarcategoria.php?id=<?php echo $row['id']?>" class="btn btn-primary">
                                    <i class="bi bi-pencil"></i>                                
                                </a>
                                &nbsp;
                                <a  href="vercategoria.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
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