<?php
session_start(); // Iniciar sesión para mantener el estado del carrito

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "fruteria");

// Verificar la conexión
if (mysqli_connect_errno()) {
    echo "Error en la conexión a MySQL: " . mysqli_connect_error();
    exit();
}

// Inicializar el carrito si no está definido
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Verificar si se ha enviado un producto para agregar al carrito
if (isset($_POST['agregar'])) {
    $producto_id = $_POST['producto_id'];
    $cantidad = isset($_POST['cantidad']) ? intval($_POST['cantidad']) : 1;
    agregarAlCarrito($producto_id, $cantidad);
}

// Verificar si se ha enviado un producto para eliminar del carrito
if (isset($_POST['eliminar'])) {
    $producto_id = $_POST['producto_id'];
    eliminarDelCarrito($producto_id);
}

// Verificar si se ha enviado la solicitud de compra
if (isset($_POST['comprar'])) {
    realizarCompra();
}

// Obtener el término de búsqueda
$term = isset($_GET['q']) ? $_GET['q'] : '';

// Número de resultados por página
$resultados_por_pagina = 10;

// Página actual (por defecto, será la primera página)
$pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

// Calcular el offset para la consulta SQL
$offset = ($pagina_actual - 1) * $resultados_por_pagina;

// Modificar la consulta SQL para agregar paginación
$query = "SELECT * FROM productos WHERE (descripcion_producto LIKE '%$term%' OR id LIKE '%$term%') AND stock_producto > 0 LIMIT $resultados_por_pagina OFFSET $offset";
$resultado = mysqli_query($conexion, $query);

// Obtener el número total de resultados para calcular el número total de páginas
$query_total = "SELECT COUNT(*) AS total FROM productos WHERE (descripcion_producto LIKE '%$term%' OR id LIKE '%$term%') AND stock_producto > 0";
$resultado_total = mysqli_query($conexion, $query_total);
$fila_total = mysqli_fetch_assoc($resultado_total);
$total_resultados = $fila_total['total'];

// Función para mostrar los productos en una tabla
function mostrarProductos($resultado) {
    echo "<table class='table display nowrap table-striped w-100 shadow'>";
    echo "<tr><th class='border-bottom-0'>ID</th>
    <th class='border-bottom-0'>Nombre</th>
    <th class='border-bottom-0'>Precio</th>
    <th class='border-bottom-0'>Stock</th>
    <th class='border-bottom-0'></th>
    <th class='border-bottom-0'>Cantidad</th>
    <th class='border-bottom-0 text-center'>Agregar</th></tr>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td class='border-bottom-0'>{$fila['id']}</td>";
        echo "<td class='border-bottom-0'>{$fila['descripcion_producto']}</td>";
        echo "<td class='border-bottom-0'>{$fila['precio_venta_producto']}</td>";
        echo "<td class='border-bottom-0'>{$fila['stock_producto']}</td>";
        echo "<td><form method='post'><input type='hidden' name='producto_id' value='{$fila['id']}'>";
        echo "<td class='border-bottom-0'> <div class='d-flex align-items-center gap-2'><input class='cantidad-input' type='number' name='cantidad' value='1' min='1' max='{$fila['stock_producto']}'></div></td>";
        echo "<td class='border-bottom-0'><button type='submit' name='agregar' class='btn btn-success' >Agregar</button></form></td>";
        echo "</tr>";
    }
    echo "</table>";
}
// Función para mostrar el carrito de compras
function mostrarCarrito() {
    echo "<h2 class='text-center'>Carrito de Compras</h2>";
    if (!empty($_SESSION['carrito'])) {
        echo "<table class='table display nowrap table-striped w-100 shadow'>";
        echo "<tr><th class='border-bottom-0'>Producto</th>
        <th class='border-bottom-0'>Precio</th>
        <th class='border-bottom-0'>Cantidad</th>
        <th class='border-bottom-0'>Acción</th></tr>";
        foreach ($_SESSION['carrito'] as $producto_id => $cantidad) {
            $producto = obtenerProductoPorId($producto_id);
            echo "<tr>";
            echo "<td>" . $producto['descripcion_producto'] . "</td>";
            echo "<td>$" . $producto['precio_venta_producto'] . "</td>";
            echo "<td>" . $cantidad . "</td>";
            echo "<td><form method='post'><input type='hidden' name='producto_id' value='" . $producto_id . "'><button type='submit' class='btn btn-danger' name='eliminar'>Eliminar</button></form></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<div class='text-end'><h4>Total de la compra: <button class='btn btn-info'>$" . calcularTotalCompra() . "</button> </h4></div>";
        echo "<form method='post'><div class='mb-3'><label for='cantidad_pagada' class='form-label'>Cantidad Pagada</label><input type='number' class='form-control' id='cantidad_pagada' name='cantidad_pagada' required></div><button type='submit' class='btn btn-success' name='comprar'>Comprar</button></form>";
        echo "<br><br><img src='assets/images/logos/gracias.png' class=' offset-lg-3' alt='Carrito Vacío' height='200px' />";
    } else {
        echo "<img src='assets/images/logos/carritotriste3.png' class=' offset-lg-3' alt='Carrito Vacío' height='200px' />";
    }
}

// Función para calcular el total de la compra
function calcularTotalCompra() {
    $total = 0;
    foreach ($_SESSION['carrito'] as $producto_id => $cantidad) {
        $producto = obtenerProductoPorId($producto_id);
        $total += $producto['precio_venta_producto'] * $cantidad;
    }
    return $total;
}

// Función para generar un número de boleta aleatorio
function generarNumeroBoleta() {
    // Generar un número de boleta único y aleatorio
    return rand(100000, 999999);
}

// Función para obtener un producto por su ID
function obtenerProductoPorId($id) {
    global $conexion;
    $query = "SELECT * FROM productos WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);
    return mysqli_fetch_assoc($resultado);
}

// Función para agregar un producto al carrito
function agregarAlCarrito($producto_id, $cantidad) {
    if (isset($_SESSION['carrito'][$producto_id])) {
        $_SESSION['carrito'][$producto_id] += $cantidad;
    } else {
        $_SESSION['carrito'][$producto_id] = $cantidad;
    }
}

// Función para eliminar un producto del carrito
function eliminarDelCarrito($producto_id) {
    if (isset($_SESSION['carrito'][$producto_id])) {
        unset($_SESSION['carrito'][$producto_id]);
    }
}
// Función para realizar la compra
function realizarCompra() {
    global $conexion;

    // Generar un número de boleta aleatorio
    $nro_boleta = generarNumeroBoleta();

    // Iniciar una transacción
    mysqli_begin_transaction($conexion);

    try {
        // Insertar el número de boleta en la tabla venta_cabecera
        $query_insert_boleta = "INSERT INTO venta_cabecera (nro_boleta) VALUES ('$nro_boleta')";
        mysqli_query($conexion, $query_insert_boleta);

        // Calcular el total de la compra
        $total_compra = calcularTotalCompra();

        // Obtener la cantidad pagada del formulario
        $cantidad_pagada = $_POST['cantidad_pagada'];

        // Calcular el cambio
        $cambio = $cantidad_pagada - $total_compra;

        // Guardar el cambio en una variable de sesión para mostrarlo en el modal
        $_SESSION['cambio'] = $cambio;

        // Insertar los detalles de la compra en la tabla venta_detalle
        foreach ($_SESSION['carrito'] as $producto_id => $cantidad) {
            $producto = obtenerProductoPorId($producto_id);
            $precio_unitario = $producto['precio_venta_producto'];
            $total_venta_producto = $precio_unitario * $cantidad;
            $fecha_venta = date("Y-m-d H:i:s");

            // Obtener el código del producto
            $codigo_producto = $producto['codigo_producto'];

            // Insertar el detalle de la compra en la tabla venta_detalle
            $query = "INSERT INTO venta_detalle (nro_boleta, codigo_producto, cantidad, total_venta, fecha_venta) VALUES ('$nro_boleta', '$codigo_producto', $cantidad, $total_venta_producto, '$fecha_venta')";
            mysqli_query($conexion, $query);

            // Actualizar el stock en la tabla productos
            $nuevo_stock = $producto['stock_producto'] - $cantidad;
            $query_update_stock = "UPDATE productos SET stock_producto = $nuevo_stock WHERE id = $producto_id";
            mysqli_query($conexion, $query_update_stock);
        }

        // Confirmar la transacción
        mysqli_commit($conexion);

        // Vaciar el carrito después de la compra
        unset($_SESSION['carrito']);
    } catch (Exception $e) {
        // Revertir la transacción en caso de error
        mysqli_rollback($conexion);
        echo "<p>Error al realizar la compra: " . $e->getMessage() . "</p>";
    }

    
}

?>

<style>
/* Estilos para el input de cantidad */
.cantidad-input {
    width: 60px;
    /* Ancho del input */
    padding: 5px;
    /* Espaciado interno */
    border: 1px solid #ced4da;
    /* Borde */
    border-radius: 4px;
    /* Bordes redondeados */
    text-align: center;
    /* Alinear texto al centro */
}

.fondo {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: url('assets/images/logos/logo-fruteria.png');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  opacity: 0.3;
  z-index: -1;
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
                    <li  class="nav-item"><img src="assets/images/logos/favicon.png"    height="60px" class='mb-2' alt=""></li>
                    <li class="nav-item">
                        <a class="nav-link" style="cursor: pointer;" aria-expanded="false"
                            onclick="CargarContenido('vistas/venta.php','content-wrapper')">
                            <span>
                                <i class="ti ti-shopping-cart "></i>
                            </span>
                            <span class="hide-menu ">Venta</span>
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
        <div class="container-fluid">
            <div class="card">
                <div class="card-body m-9">
                
                    <div class="row">
                        <div class="col-md-7">
                            <div class="mb-3">

                                <div class="mb-3">
                                    <form method="GET">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="q"
                                                placeholder="Buscar productos por nombre o código"
                                                value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>">
                                            <button type="submit" class="btn btn-primary">Buscar</button>
                                            <?php if(isset($_GET['q'])): ?>
                                            <button type="button" class="btn btn-danger"
                                                onclick="limpiarBusqueda()">Borrar
                                                búsqueda</button>
                                            <?php endif; ?>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <?php
                    // Mostrar los productos
                    echo "<h2>Productos</h2>";
                    mostrarProductos($resultado);
                    ?>

                            <!-- Botones de paginación -->
                            <nav aria-label='Page navigation example'>
                                <ul class='pagination justify-content-center'>
                                    <?php
                            // Calcular el número total de páginas
                            $total_paginas = ceil($total_resultados / $resultados_por_pagina);

                            // Mostrar los botones de paginación
                            for ($i = 1; $i <= $total_paginas; $i++) {
                                echo "<li class='page-item " . ($pagina_actual == $i ? 'active' : '') . "'><a class='page-link' href='venta.php?pagina=$i&q=$term'>$i</a></li>";
                            }
                            ?>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-5 ">

                            <?php
                    // Mostrar el carrito de compras
                    mostrarCarrito();

                    // Cerrar la conexión a la base de datos
                    mysqli_close($conexion);
                    ?>

                        

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
<!-- Agrega esta sección del modal al final del cuerpo de tu página -->
<div class="modal fade" id="compraExitosaModal" tabindex="-1" aria-labelledby="compraExitosaModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="compraExitosaModalLabel">Compra realizada con éxito</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Su compra se ha realizado con éxito.</p>
                <!-- Mostrar el cambio calculado -->
                <?php if (isset($_SESSION['cambio'])): ?>
                    <p>Cambio: $<?php echo $_SESSION['cambio']; ?></p>
                <?php endif; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
<?php
    // Verificar si se ha realizado una compra para mostrar el modal
    if (isset($_POST['comprar'])) {
        echo '$(document).ready(function(){';
        echo '$("#compraExitosaModal").modal("show");';
        echo '});';
    }
    ?>
</script>


<script>
function limpiarBusqueda() {
    window.location.href = 'venta.php';
}
</script>