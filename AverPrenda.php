<?php 
    include("db/db.php");
    include("includes/nav.php");
?>


<div class="container p-4">
    <br><br>
    <h1>Detalles de la prenda</h1><br>
    <?php
        if  (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT * FROM prenda WHERE id_prenda=$id";
            $resultado = mysqli_query($conex, $query);
            if($row = mysqli_fetch_assoc($resultado)){ ?>
    <div class ="row">
        <div class ="col">
<br><br><br><br><br>

            <table class ="table table-bordered">
                <thead class= "bg-azulf" style="color:white;">
                <tr>
                    <th> ID prenda </th>
                    <th> Nombre </th>
                    <th> Cantidad inicial</th>
                    <th> Tallas </th>
                    <th> Colores</th>
                    <th> Precio unitario</th>
                    <th> Fecha de registro</th>
                </tr>
                </thead>
                <tbody>
                            <tr>
                                <td> <?php echo $row['id_prenda'] ?> </td>
                                <td> <?php echo $row['nombre'] ?> </td>
                                <td> <?php echo $row['cantidad_inicial'] ?> </td>
                                <td> <?php echo $row['talla'] ?> </td>
                                <td> <?php echo $row['color'] ?> </td>
                                <td> <?php echo $row['precio_unitario'] ?> </td>
                                <td> <?php echo $row['fecha_registro'] ?> </td>
                            </tr>
                                
                            <?php } }?>                
                </tbody>
            </table>
        
        </div>

    </div>

</div>
<br><br><br><br>
<?php include("includes/footer.php") ?>