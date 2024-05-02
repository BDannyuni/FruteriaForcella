
<?php
include("conexion.productos.php");
$getmysql = new mysqlconex();
$getconext = $getmysql->conex();


if (isset($_POST["eliminar"])) {
    $id = $_POST["id_categoria"];
    $nombre = $_POST["nombre_categoria"];

    $query = "DELETE FROM categorias WHERE id_categoria=?";
    $sentencia = mysqli_prepare($getconext, $query);
    mysqli_stmt_bind_param($sentencia, "i", $id);
    mysqli_stmt_execute($sentencia);
    $afectado = mysqli_stmt_affected_rows($sentencia);
    if ($afectado == 1) {
        echo "<script> alert('El empleado [$nombre] se elimino correctamente'); location.href='../index2.php'; </script>";
    } else {
        echo "<script> alert('El empleado [$nombre] no elimino correctamente :( '); location.href='../index2.php'; </script>";
    }
}
?>