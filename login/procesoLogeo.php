<?php

if (isset($_POST['btningresar'])) {
    if (strlen($_POST['Usuario'])>=1 && strlen($_POST['Contraseña'])>=1 ) {
        $NombreUsuario=$_POST['Usuario'];
        $Contra=$_POST['Contraseña'];

        $conex=mysqli_connect("localhost","root","","fruteria");
        $consulta=mysqli_query($conex, "SELECT * FROM usuarios WHERE usuario='$NombreUsuario' AND contra='$Contra'");
        $detalles=mysqli_fetch_array($consulta);

        if ($detalles) {
            session_start();
            $_SESSION['usuario'] = $detalles['usuario'];
            $_SESSION['cargo'] = $detalles['tipo'];

            if ($_SESSION['cargo'] == '1') {
                header("Location: index2.php");
            }
            if ($_SESSION['cargo'] == '2') {
                header("Location: vistas/usuario.php");
            }


        }
        else{
            echo "Error en uno de los Campos";
        }
    }
    else{
        echo "COMPLETA LOS CAMPOS";
    }
}

if (isset($_POST['btnregistrar'])) {
    
}

?>
