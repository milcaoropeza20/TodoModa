<?php 
    include("db/db.php");
    include("includes/nav.php");
    include("edits/AeditarPrenda.php");
?>
<br><br><br>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
    <h1>Editar datos</h1><br>
      <div class="card card-body">
      <form action="AeditarPrenda.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
        <input name="talla" class="form-control" cols="30" rows="10" value="<?php echo $talla; ?>" placeholder="Modificar talla" minlength="4" maxlength="50" required>
        </div>
        <br>
        <div class =form-group>
        <input name="preciop" type="number" class="form-control" value="<?php echo $preciop; ?>" placeholder="Modificar precio por pieza" min =5 max = 10000 required>
        </div><br>
        <div class =form-group>
        <input name="color" type="text" class="form-control" value="<?php echo $color; ?>" placeholder="Modificar linea del producto" minlength="4" maxlength="50" required>
        </div>
        <button class="btn btn-danger rounded-3 my-4"name="actualizar">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>