<?php
session_start();
if ($_SESSION['cargo'] == '1') {
?>
<style>
.card-tools.text-center {
    display: flex;
    justify-content: center;
}
</style>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="../vistas/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../vistas/assets/css/styles.min.css" />
</head>

<body
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../vistas/assets/images/backgrounds/agregar.jpg) ; background-size:cover;">

    <?php
    $id_producto = $_POST["id_producto"];
    $nombre=$_POST['nombre'];
    $codigo=$_POST['codigo'];
    $nombre_categoria=$_POST['categorias'];
    $Pc=$_POST['Pc'];
    $Pv=$_POST['Pv'];
    $utilidad=$_POST['utilidad'];
    $stock=$_POST['stock'];
    $minstock=$_POST['minstock'];
    $id_proveedor=$_POST['id_proveedor'];

 
    if(isset($_POST["editar2"])){
        include("conexion.productos.php");
        $getmysql=new mysqlconex();
        $getconex=$getmysql->conex();

        $query="UPDATE productos SET descripcion_producto=?,codigo_producto=?,id_categoria_producto=?,precio_compra_producto=?,precio_venta_producto=?,utilidad=?,stock_producto=?,minimo_stock_producto=?, id_proveedor=? WHERE id=?";
        $sentencia = mysqli_prepare($getconex, $query);
        mysqli_stmt_bind_param($sentencia, "siiiiiiiii", $nombre, $codigo, $nombre_categoria, $Pc, $Pv, $utilidad, $stock, $minstock, $id_proveedor, $id_producto);
        mysqli_stmt_execute($sentencia);
        $afectado=mysqli_stmt_affected_rows($sentencia);
        if($afectado==1){
            echo "<script> alert('El empleado $nombre se edito correctamente :) '); location.href='../index2.php';  </script>";
        }else{
            echo "<script> alert('El empleado $nombre no se edito :( '); location.href='../index2.php'; </script>";
        }
        mysqli_stmt_close($sentencia);
        mysqli_close($getconex);
    }

    ?>


    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item"><a href="../index2.php"><img src="../vistas/assets/images/logos/favicon.png" height="60px" class='mb-2'
                            alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="cursor: pointer;" aria-expanded="false"
                            onclick="CargarContenido('vistas/venta.php','content-wrapper')">
                            <span>
                                <i class="ti ti-pencil "></i>
                            </span>
                            <span class="hide-menu ">Editar</span>
                        </a>
                    </li>
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                        <li class="nav-item"><?php
                    echo "<h4 class='nav-link'> $_SESSION[usuario]</h4>";
                  ?></li>
                        <li class="nav-item">
                            <button class="btn btn-danger m-2"><a style="cursor: pointer;"
                                    class="sidebar-link text-white" href="../index2.php">Regresar</a></button>
                        </li>

                        <li class="nav-item">

                            <a href="../login/procesoExit.php" class="btn btn-outline-primary ">Cerrar Sesion</a>

                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!--  Header End -->
        <div class="container-fluid"><br><br>
            <h1 class="text-white text-center ">Editar Producto</h1><br><br>
            <div class="card">
                <div class="card-body">
                    <form action="editar.productos.php" method="post">

                        <!-- Id del Producto, Código y Nombre del Producto -->
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Id del Producto</label>
                                <input type="text" class="form-control" value="<?php echo $id_producto ?>"
                                    name="id_producto">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Código</label>
                                <input type="text" class="form-control" value="<?php echo $codigo ?>" name="codigo">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Nombre del Producto</label>
                                <input type="text" class="form-control" value="<?php echo $nombre ?>" name="nombre">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <label class="form-label">Categoria</label>
                                <select name="categorias" class="form-select" id="categorias">
                                    <option value="<?php echo $nombre_categoria ?>"> <?php echo $nombre_categoria ?>
                                    </option>
                                    <?php
            include("../modelos/conexion.productos.php");
            $getmysql = new mysqlconex();
            $getconex = $getmysql->conex();

            $consulta = "SELECT * FROM categorias order by id_categoria";
            $resultado = mysqli_query($getconex, $consulta);
            while($row = mysqli_fetch_assoc($resultado))
            {
                $id = $row['id_categoria'];
                $nombre_categoria = $row['nombre_categoria'];
                $aplica_peso= $row['aplica_peso'];
                $fecha_creacion_categoria = $row['fecha_creacion_categoria'];
                $fecha_actualizacion_categoria = $row['fecha_actualizacion_categoria'];
            ?>
                                    <option value="<?php echo $id; ?>"><?php echo $nombre_categoria ?></option>
                                    <?php
            }
            ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Proveedor</label>
                                <select name="id_proveedor" class="form-select" id="id_proveedor">
                                <option value="<?php echo $id_proveedor ?>" selected> <?php echo $id_proveedor ?></option>
                                    <?php
            $consulta = "SELECT * FROM proveedores order by id";
            $resultado = mysqli_query($getconex, $consulta);
            while($row = mysqli_fetch_assoc($resultado))
            {
                $id_proveedor = $row['id'];
                $proveedor = $row['nombre_proveedor'];
                $telefono= $row['telefono'];
                $correo = $row['correo'];
            ?>
                                    <option value="<?php echo $id_proveedor; ?>"><?php echo $proveedor ?></option>
                                    <?php
            }
            mysqli_close($getconex);
            ?>
                                </select>
                            </div>
                        </div>
                        <!-- Precio de Compra, Precio de Venta y Utilidad -->
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Precio de Compra</label>
                                <input type="text" class="form-control" value="<?php echo $Pc ?>" name="Pc">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Precio de Venta</label>
                                <input type="text" class="form-control" value="<?php echo $Pv ?>" name="Pv">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Utilidad</label>
                                <input type="text" class="form-control" value="<?php echo $utilidad ?>" name="utilidad">
                            </div>
                        </div>
                        <!-- Stock y Minimo Stock -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Stock</label>
                                <input type="text" class="form-control" value="<?php echo $stock ?>" name="stock">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mínimo Stock</label>
                                <input type="text" class="form-control" value="<?php echo $minstock ?>" name="minstock">
                            </div>
                        </div>

                        <br><br>
                        <div class="text-center">
                            <input class='btn btn-success' type="submit" name="editar2" value="Editar Producto">
                            <button class="btn btn-danger m-2"><a style="cursor: pointer;"
                                    class="sidebar-link text-white" href="../index2.php">Regresar</a></button>
                        </div>

                    </form>

                </div>



            </div>
        </div>
    </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>


<body>







    </div>

    </div>

    <br>


</body>

</html>

<?php
}
else{
    header("Location:usuario.php");
}

?>