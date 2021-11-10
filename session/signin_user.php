<?php
$alert2='';
if(isset($_POST['guardarUsuario']))
{
    if(empty($_POST['correo']) || empty($_POST['contraseña']))
    {
        $alert2 = 'Ingrese los datos faltantes';
    } 
    else{
        require_once "db\db.php";
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $correo_registrado = "SELECT FROM usuario correo_electronico";
        $contraseña = hash('sha512',$contraseña);
        //solo podrán de dar de alta nuevos usuarios los usuarios que se registraron anteriormente
           // $_SESSION['active'] = true;
            $queryregistro = "INSERT into usuario(correo_electronico,pass)
            values('$correo','$contraseña')";
            if(mysqli_query($conex,$queryregistro))
            //if(!$resultado)
            {
                header('Location: opc.php');
            
            }
            else if($correo ==$correo_registrado)
            {

                $alert2= 'Correo registrado anteriormente';
                //header('Location: index.php');
            }

        }
    }
    ?>