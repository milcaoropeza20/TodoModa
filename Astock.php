<?php 
    include("db/db.php");
    include("includes/nav.php");
?>


<div class="container p-4">
    <br><br>
    <h1>Stock</h1><br>
    <div class ="row">
        <div class ="col">

            <table class ="table table-bordered">
                <thead class= "bg-azulf" style="color:white;">
                <tr>
                    <th> ID prenda </th>
                    <th> Nombre </th>
                    <th> Cantidad stock </th>
                    <th> Acciones </th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    /* Seleccionamos todos los datos de la tabla producto a traves de la consulta select*/
                        $query ="SELECT *FROM stock,prenda where stock.id_prenda = prenda.id_prenda";
                    /*Generamos una variable donde le mandamos la conecion extablecida y la consulta devolviendo todas los productos guardados*/
                        $resultado_productos = mysqli_query($conex,$query);
                    /* Para poder mostrar los datos nos apoyamos de while para ir recorriendo estos datos y poderlos mostrar */
                        while($row = mysqli_fetch_assoc($resultado_productos)){ ?>
                            <tr>
                                <td> <?php echo $row['id_prenda'] ?> </td>
                                <td> <?php echo $row['nombre'] ?> </td>
                                <td> <?php echo $row['cantidad_stock'] ?> </td>
                                <td> 
                                &nbsp;
                                <a href="entradas.php?id=<?php echo $row['id_prenda']?>" class="btn btn-success">
                                <i class="bi bi-plus"></i> </a>&nbsp;
                                <a href="salidas.php?id=<?php echo $row['id_prenda']?>" class="btn btn-success">
                                <i class="bi bi-dash"></i> </a>
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
