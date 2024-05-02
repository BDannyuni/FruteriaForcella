<?php
session_start();
if ($_SESSION['cargo'] == '1') {
?>

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
    $id_proveedor = $_POST["id_proveedor"];
    $nombre_proveedor = $_POST["nombre_proveedor"];
    $telefono_proveedor = $_POST["telefono_proveedor"];
    $correo_proveedor = $_POST["correo_proveedor"];

 
    if(isset($_POST["editar2"])){
        include("conexion.productos.php");
        $getmysql=new mysqlconex();
        $getconex=$getmysql->conex();

        $query="UPDATE proveedores SET nombre_proveedor=?,telefono=?,correo=? WHERE id=?";
        $sentencia=mysqli_prepare($getconex,$query);
        mysqli_stmt_bind_param($sentencia,"sisi",$nombre_proveedor,$telefono_proveedor,$correo_proveedor,$id_proveedor);
        mysqli_stmt_execute($sentencia);
        $afectado=mysqli_stmt_affected_rows($sentencia);
        if($afectado==1){
            echo "<script> alert('El empleado $nombre_proveedor se edito correctamente :) '); location.href='../index2.php'; </script>";
        }else{
            echo "<script> alert('El empleado $nombre_proveedor no se edito :( '); location.href='../index2.php'; </script>";
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
            <h1 class="text-white">Editar Proveedor</h1><br><br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="editar.proveedor.php" method="post">
                                
                                <div class="mb-3">
                                    <label class="form-label">Id</label>
                                    <input type="text" class="form-control" value="<?php echo $id_proveedor ?>"
                                        name="id_proveedor">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nombre del Proveedor</label>
                                    <input type="text" class="form-control" value="<?php echo $nombre_proveedor ?>"
                                        name="nombre_proveedor">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">No. Telefono</label>
                                    <input type="text" class="form-control" value="<?php echo $telefono_proveedor ?>"
                                        name="telefono_proveedor">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Correo Electronico</label>
                                    <input type="text" class="form-control" value="<?php echo $correo_proveedor ?>"
                                        name="correo_proveedor">
                                </div>


                                <div class="card-tools offset-lg-3" style="display: inline">
                                    <input class='btn btn-success' type="submit" name="editar2"
                                        value="Editar Proveedor">
                                    <button class="btn btn-danger m-2"><a style="cursor: pointer;"
                                            class="sidebar-link text-white" href="../index2.php">Regresar</a></button>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                <br><br><img src='../vistas/assets/images/logos/favicon.png' class=' offset-lg-3' alt='Carrito Vacío' height='300px' /></div>
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