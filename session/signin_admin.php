<?php
$alert2='';
if(isset($_POST['guardarAdmin']))
{
    if(empty($_POST['correo']) || empty($_POST['contraseña']))
    {
        $alert2 = 'Ingrese los datos faltantes';
    } 
    else{
        require_once "db\db.php";
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $correo_registrado = "SELECT FROM administrador correo_electronico";
        
        $contraseña = hash('sha512',$contraseña);
        //solo podrán de dar de alta nuevos usuarios los usuarios que se registraron anteriormente
        $_SESSION['active'] = true;
        $_SESSION['active'] = true;
        $queryusuario = "INSERT into usuario(correo_electronico,pass)
        values('$correo','$contraseña')";
        $queryregistro = "INSERT into administrador(nombre,apellido,correo_electronico,pass)
        values('$nombre','$apellido','$correo','$contraseña')";
        if(mysqli_query($conex,$queryregistro))
        {
            header('Location: index.php');
            
        }
        else if($correo ==$correo_registrado)
        {
            $alert2= 'Correo registrado anteriormente';
                //header('Location: index.php');
        }

        }
    }
    ?>