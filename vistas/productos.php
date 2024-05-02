<style>
.icon {
    margin-right: 10px
}

.small-box {
    border-radius: .25rem;
    box-shadow: 0 0 1px rgba(0, 0, 0, .125), 0 1px 3px rgba(0, 0, 0, .2);
    display: block;
    margin-bottom: 20px;
    position: relative
}

.small-box>.inner {
    padding: 10px
}

.small-box>.small-box-footer {
    background-color: rgba(0, 0, 0, .1);
    color: rgba(255, 255, 255, .8);
    display: block;
    padding: 3px 0;
    position: relative;
    text-align: center;
    text-decoration: none;
    z-index: 10
}

.small-box>.small-box-footer:hover {
    background-color: rgba(0, 0, 0, .15);
    color: #fff
}

.small-box h3 {
    font-size: 2.2rem;
    font-weight: 700;
    margin: 0 0 10px;
    padding: 0;
    white-space: nowrap
}

@media (min-width:992px) {

    .col-lg-2 .small-box h3,
    .col-md-2 .small-box h3,
    .col-xl-2 .small-box h3 {
        font-size: 1.6rem
    }

    .col-lg-3 .small-box h3,
    .col-md-3 .small-box h3,
    .col-xl-3 .small-box h3 {
        font-size: 1.6rem
    }
}

@media (min-width:1200px) {

    .col-lg-2 .small-box h3,
    .col-md-2 .small-box h3,
    .col-xl-2 .small-box h3 {
        font-size: 2.2rem
    }

    .col-lg-3 .small-box h3,
    .col-md-3 .small-box h3,
    .col-xl-3 .small-box h3 {
        font-size: 2.2rem
    }
}

.small-box p {
    font-size: 1rem
}

.small-box p>small {
    color: #f8f9fa;
    display: block;
    font-size: .9rem;
    margin-top: 5px
}

.small-box h3,
.small-box p {
    z-index: 5
}

.small-box .icon {
    color: rgba(0, 0, 0, .15);
    z-index: 0
}

.small-box .icon>i {
    font-size: 90px;
    position: absolute;
    right: 15px;
    top: 15px;
    transition: -webkit-transform .3s linear;
    transition: transform .3s linear;
    transition: transform .3s linear, -webkit-transform .3s linear
}

.small-box .icon>i.fa,
.small-box .icon>i.fab,
.small-box .icon>i.fad,
.small-box .icon>i.fal,
.small-box .icon>i.far,
.small-box .icon>i.fas,
.small-box .icon>i.ion {
    font-size: 70px;
    top: 20px
}

.small-box .icon svg {
    font-size: 70px;
    position: absolute;
    right: 15px;
    top: 15px;
    transition: -webkit-transform .3s linear;
    transition: transform .3s linear;
    transition: transform .3s linear, -webkit-transform .3s linear
}

.small-box:hover {
    text-decoration: none
}

.small-box:hover .icon>i,
.small-box:hover .icon>i.fa,
.small-box:hover .icon>i.fab,
.small-box:hover .icon>i.fad,
.small-box:hover .icon>i.fal,
.small-box:hover .icon>i.far,
.small-box:hover .icon>i.fas,
.small-box:hover .icon>i.ion {
    -webkit-transform: scale(1.1);
    transform: scale(1.1)
}

.small-box:hover .icon>svg {
    -webkit-transform: scale(1.1);
    transform: scale(1.1)
}

@media (max-width:767.98px) {
    .small-box {
        text-align: center
    }

    .small-box .icon {
        display: none
    }

    .small-box p {
        font-size: 12px
    }
}

.bg-primary {
    background-color: #007bff !important
}

a.bg-primary:focus,
a.bg-primary:hover,
button.bg-primary:focus,
button.bg-primary:hover {
    background-color: #0062cc !important
}

.bg-secondary {
    background-color: #6c757d !important
}

a.bg-secondary:focus,
a.bg-secondary:hover,
button.bg-secondary:focus,
button.bg-secondary:hover {
    background-color: #545b62 !important
}

.bg-success {
    background-color: #28a745 !important
}

a.bg-success:focus,
a.bg-success:hover,
button.bg-success:focus,
button.bg-success:hover {
    background-color: #1e7e34 !important
}

.bg-info {
    background-color: #17a2b8 !important
}

a.bg-info:focus,
a.bg-info:hover,
button.bg-info:focus,
button.bg-info:hover {
    background-color: #117a8b !important
}

.bg-warning {
    background-color: #ffc107 !important
}

a.bg-warning:focus,
a.bg-warning:hover,
button.bg-warning:focus,
button.bg-warning:hover {
    background-color: #d39e00 !important
}

.bg-danger {
    background-color: #dc3545 !important
}

a.bg-danger:focus,
a.bg-danger:hover,
button.bg-danger:focus,
button.bg-danger:hover {
    background-color: #bd2130 !important
}

.bg-light {
    background-color: #f8f9fa !important
}

a.bg-light:focus,
a.bg-light:hover,
button.bg-light:focus,
button.bg-light:hover {
    background-color: #dae0e5 !important
}

.bg-dark {
    background-color: #343a40 !important
}

a.bg-dark:focus,
a.bg-dark:hover,
button.bg-dark:focus,
button.bg-dark:hover {
    background-color: #1d2124 !important
}

.bg-white {
    background-color: #fff !important
}

.bg-transparent {
    background-color: transparent !important
}

.inner {
    padding: 10px
}
/* Este elemento debe tener "position: relative" */
div#is-relative{
  max-width: 420px;
  position: relative;
}

/* El icono debe ser "position: absolute"
 * Ademas le damos un "display: block" y lo posicionamos */
#icon{
  position: absolute;
  display: block;
  bottom: .5rem;
  right: .7rem;
  user-select: none;
  cursor: pointer;
}
input.input{
  padding-right: 2.5rem;
}
</style>

<div class="container-fluid">
    <br><br><br>

    <h1>Productos</h1>
    <br>
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 style="display: inline" class="card-title fw-semibold mb-4">Inventario</h5>
                    <div class="card-tools offset-lg-9 " style="display: inline">
                        <h5 style="display: inline" class="card-title fw-semibold mb-4">Productos Registrados </h5>
                        <button style="display: inline" id="totalProductos" type="button"
                            class="btn btn-info m-1 "></button>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Id</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Producto</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Codigo</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Id Categoria</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Categoria</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Precio de Compra</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Precio de Venta</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Utilidad</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Stock</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Min Stock</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        Editar
                                    </th>
                                    <th class="border-bottom-0">
                                        Eliminar
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
            include("../modelos/conexion.productos.php");
            $getmysql = new mysqlconex();
            $getconex = $getmysql->conex();

            $consulta = "SELECT * FROM productos p inner JOIN categorias c on p.id_categoria_producto = c.id_categoria order by p.id; ";
            $resultado = mysqli_query($getconex, $consulta);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td class='border-bottom-0'>" . $fila["id"] . "</td>";
                echo "<td class='border-bottom-0'>" . $fila["descripcion_producto"] . "</td>";
                echo "<td class='border-bottom-0'>" . $fila["codigo_producto"] . "</td>";
                echo "<td class='border-bottom-0'>" . $fila["id_categoria_producto"] . "</td>";
                echo "<td class='border-bottom-0'>" . $fila["nombre_categoria"] . "</td>";
                echo "<td class='border-bottom-0'><h6 class='fw-semibold mb-0 fs-4'>$" . $fila["precio_compra_producto"] . "</h6></td>";
                echo "<td class='border-bottom-0'><h6 class='fw-semibold mb-0 fs-4'>$" . $fila["precio_venta_producto"] . "</h6></td>";
                echo "<td class='border-bottom-0'><h6 class='fw-semibold mb-0 fs-4'><span class='badge bg-success rounded-3 fw-semibold'>$" . $fila["utilidad"] . "</span></h6></td>";
                echo "<td class='border-bottom-0'> <div class='d-flex align-items-center gap-2'> <span class='badge bg-primary rounded-3 fw-semibold'>" . $fila["stock_producto"] . "</span></div></td>";
                echo "<td class='border-bottom-0'> <div class='d-flex align-items-center gap-2'> <span class='badge bg-danger rounded-3 fw-semibold'>" . $fila["minimo_stock_producto"] . "</span></div></td>";
                echo "<td class='border-bottom-0'>
                    <form action='modelos/editar.productos.php' method='POST'>
                    <input type='hidden' name='id_producto' value='" . $fila["id"] . "'>
                    <input type='hidden' name='nombre' value='" . $fila["descripcion_producto"] . "'>
                    <input type='hidden' name='codigo' value='" . $fila["codigo_producto"] . "'>
                    <input type='hidden' name='categorias' value='" . $fila["id_categoria_producto"] . "'>  
                    <input type='hidden' name='Pc' value='" . $fila["precio_compra_producto"] . "'>  
                    <input type='hidden' name='Pv' value='" . $fila["precio_venta_producto"] . "'> 
                    <input type='hidden' name='utilidad' value='" . $fila["utilidad"] . "'>  
                    <input type='hidden' name='stock' value='" . $fila["stock_producto"] . "'> 
                    <input type='hidden' name='minstock' value='" . $fila["minimo_stock_producto"] . "'> 
                    <input type='hidden' name='id_proveedor' value='" . $fila["id_proveedor"] . "'>   
                    <input type='submit' name='editar' class='btn btn-info ' value='Editar' '>
                    </form>
                </td>";
                echo "<td >
                    <form action='modelos/eliminar.productos.php' method='POST'>
                    <input type='hidden' name='id' value='" . $fila["id"] . "'>
                    <input type='hidden' name='nombre' value='" . $fila["descripcion_producto"] . "'>
                    <input type='submit' name='eliminar' class='btn btn-danger' value='Eliminar' onclick='return confirmacion()'>
                    </form>
                </td>";
                echo "</tr>";
                
            }
            mysqli_close($getconex);
            ?>
                            </tbody>
                        </table>
                    </div>

                    

                <script>
                $(document).ready(function() {

                    $.ajax({
                        url: "ajax/dashboard.ajax.php",
                        method: 'POST',
                        dataType: 'json',
                        success: function(respuesta) {
                            console.log("respuesta", respuesta);
                            $("#totalProductos").html(respuesta[0]['totalProductos']);
                        }

                    })
                });
                </script>