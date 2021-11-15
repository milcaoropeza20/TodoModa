<?php 
session_start();

$alert ='';
if(!empty($_POST))
{
  if(empty($_POST['correo']) || empty($_POST['contraseña']))
  {
    $alert = 'Ingrese usuario y contraseña';
  }
  else{
    require_once "db\db.php";
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $contraseña = hash('sha512',$contraseña);


    $admin = mysqli_query($conex,"SELECT * FROM administrador WHERE correo_electronico = '$correo' and pass ='$contraseña'");
    $cliente = mysqli_query($conex,"SELECT * FROM cliente WHERE correo_electronico = '$correo' and pass ='$contraseña'");

    $resultA = mysqli_num_rows($admin);
    $resultC = mysqli_num_rows($cliente);
    if($resultA > 0)
    {
        $_SESSION['correo'] = $correo;
        header("location:Aprincipal.php");
        exit;
    }    
    if($resultC > 0)
    {
        $_SESSION['correo'] = $correo;
        header("location:Cprincipal.php");
        exit;
    }    
    else{
        $alert= 'Usuario o contraseña inválidos';
      session_destroy();
    }
  }
}
?>