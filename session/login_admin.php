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


    $validar_login = mysqli_query($conex,"SELECT * FROM administrador WHERE correo_electronico = '$correo' and pass ='$contraseña'");

    $result = mysqli_num_rows($validar_login);
    if($result > 0)
    {
        $_SESSION['correo'] = $correo;
        header("location:Aprincipal.php");
        exit;
    }    
    else{
        $alert= 'Usuario o contraseña inválidos';
      session_destroy();
    }
  }
}
?>