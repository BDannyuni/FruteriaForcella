<?php

include("conexion.productos.php");

$getmysql=new mysqlconex();
$getconex=$getmysql->conex();

if (isset($_POST['registrar_proveedor'])) {
    $id_proveedor = $_POST["id_proveedor"];
    $nombre_proveedor = $_POST["nombre_proveedor"];
    $telefono_proveedor = $_POST["telefono_proveedor"];
    $correo_proveedor = $_POST["correo_proveedor"];



    $query="INSERT INTO proveedores (id, nombre_proveedor, telefono, correo) VALUES (?,?,?,?)";
    $sentencia = mysqli_prepare($getconex, $query);
    mysqli_stmt_bind_param($sentencia, "isis", $id_proveedor, $nombre_proveedor, $telefono_proveedor, $correo_proveedor);
    mysqli_stmt_execute($sentencia);
    $afectado = mysqli_stmt_affected_rows($sentencia);
    if ($afectado == 1) {
        echo "<script> alert('La Categoria [$nombre_proveedor] se agrego correctamente'); location.href='../index2.php'; </script>";
    } else {
        echo "<script> alert('La Categoria [$nombre_proveedor] no agrego correctamente :( '); location.href='../index2.php'; </script>";
    }
    mysqli_stmt_close($sentencia);
    mysqli_close($getconex);

}
?>
