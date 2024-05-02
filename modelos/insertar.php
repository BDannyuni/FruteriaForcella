<?php

include("conexion.productos.php");

$getmysql=new mysqlconex();
$getconex=$getmysql->conex();

if (isset($_POST['registrar'])) {
     $nombre=$_POST['nombre'];
     $codigo=$_POST['codigo'];
     $nombre_categoria=$_POST['categorias'];
     $Pc=$_POST['Pc'];
     $Pv=$_POST['Pv'];
     $utilidad=$_POST['utilidad'];
     $stock=$_POST['stock'];
     $minstock=$_POST['minstock'];


    $query="INSERT INTO productos (descripcion_producto,codigo_producto,id_categoria_producto,precio_compra_producto,precio_venta_producto,utilidad,stock_producto,minimo_stock_producto) VALUES (?,?,?,?,?,?,?,?)";
    $sentencia = mysqli_prepare($getconex, $query);
    mysqli_stmt_bind_param($sentencia, "siiiiiii", $nombre, $codigo, $nombre_categoria, $Pc, $Pv, $utilidad, $stock, $minstock);
    mysqli_stmt_execute($sentencia);
    $afectado = mysqli_stmt_affected_rows($sentencia);
    if ($afectado == 1) {
        echo "<script> alert('El empleado [$nombre] se agrego correctamente'); location.href='../index2.php'; </script>";
    } else {
        echo "<script> alert('El empleado [$nombre] no agrego correctamente :( '); location.href='../index2.php'; </script>";
    }
    mysqli_stmt_close($sentencia);
    mysqli_close($getconex);

}
?>
