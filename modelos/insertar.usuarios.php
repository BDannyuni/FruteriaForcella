<?php

include("conexion.productos.php");

$getmysql=new mysqlconex();
$getconex=$getmysql->conex();

if (isset($_POST['registrar_usuario'])) {
    $nombre_usuario = $_POST["nombre_completo_usuario"];
    $correo_usuario = $_POST["correo_usuario"];
    $usuario = $_POST["usuario"];
    $contra_usuario = $_POST["contra_usuario"];
    $tipo_usuario = $_POST["tipo_usuario"];

    $query="INSERT INTO usuarios ( nombre_completo, correo, usuario, contra, tipo) VALUES (?,?,?,?,?)";
    $sentencia = mysqli_prepare($getconex, $query);
    mysqli_stmt_bind_param($sentencia, "ssssi", $nombre_usuario, $correo_usuario, $usuario,$contra_usuario ,$tipo_usuario );
    mysqli_stmt_execute($sentencia);
    $afectado = mysqli_stmt_affected_rows($sentencia);
    if ($afectado == 1) {
        echo "<script> alert('La Categoria [$nombre_usuario] se agrego correctamente'); location.href='../index.php';  </script>";
    } else {
        echo "<script> alert('La Categoria [$nombre_usuario] no agrego correctamente :( '); location.href='../index.php'; </script>";
    }
    mysqli_stmt_close($sentencia);
    mysqli_close($getconex);

}
?>
