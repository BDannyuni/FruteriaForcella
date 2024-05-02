<?php

include("conexion.productos.php");

$getmysql=new mysqlconex();
$getconex=$getmysql->conex();

if (isset($_POST['registrar_categoria'])) {
    $id_categoria=$_POST['id_categoria'];
     $nombrecategoria=$_POST['nombre_categoria'];
     $aplicapeso=$_POST['aplicapeso'];


    $query="INSERT INTO categorias (id_categoria, nombre_categoria, aplica_peso) VALUES (?,?,?)";
    $sentencia = mysqli_prepare($getconex, $query);
    mysqli_stmt_bind_param($sentencia, "isi", $id_categoria, $nombrecategoria, $aplicapeso);
    mysqli_stmt_execute($sentencia);
    $afectado = mysqli_stmt_affected_rows($sentencia);
    if ($afectado == 1) {
        echo "<script> alert('La Categoria [$nombrecategoria] se agrego correctamente'); location.href='../index2.php'; </script>";
    } else {
        echo "<script> alert('La Categoria [$nombrecategoria] no agrego correctamente :( '); location.href='../index2.php'; </script>";
    }
    mysqli_stmt_close($sentencia);
    mysqli_close($getconex);

}
?>
