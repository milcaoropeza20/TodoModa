<?php
$alert2='';
if(isset($_POST['guardarCustomer']))
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
        $colonia = $_POST['colonia'];
        $calle = $_POST['calle'];
        $numero = $_POST['numero'];
        $telefono = $_POST['telefono'];
        $contraseña = $_POST['contraseña'];
        $correo_registrado = "SELECT FROM cliente correo_electronico";
        
        $contraseña = hash('sha512',$contraseña);
        //solo podrán de dar de alta nuevos usuarios los usuarios que se registraron anteriormente
        $_SESSION['active'] = true;
        $queryregistro = "INSERT into cliente(nombre,apellido,colonia, calle, numero, telefono, correo_electronico, pass)
        values('$nombre','$apellido','$colonia', '$calle', '$numero', '$telefono','$correo','$contraseña')";
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