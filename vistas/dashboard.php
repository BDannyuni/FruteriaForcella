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
</style>
<div class="container-fluid">
    <br><br><br>
    <h1>Tablero Principal</h1>


    <div class="card">
        <div class="card-body">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">

                    <div class="row">

                        <!-- TARJETA TOTAL VENTAS -->
                        <div class="col-lg-3">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3 style="color: white;" id="totalVentas"></h3>
                                    <br>
                                    <p style="color: white;">Total de Ventas</p>
                                </div><br>
                                <div class="icon">
                                    <i class="ion ion-cash"></i>
                                </div>
                            </div>
                        </div>

                        <!-- TARJETA GANANCIAS -->
                        <div class="col-lg-3">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3 style="color: white;" id="totalGanancias"></h3>
                                    <br>
                                    <p style="color: white;">Total de Ganancias</p>
                                </div><br>
                                <div class="icon">
                                    <i class="ion ion-ios-pie"></i>
                                </div>
                            </div>
                        </div>

                        <!-- TARJETA TOTAL DE PRODUCTOS CON POCO STOCK -->
                        <div class="col-lg-3">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    
                                    <h3 id="totalProductosMinStock"></h3>
                                    <br>
                                    <p style="color: black;">Productos con Poco Stock</p>
                                    
                                </div><br>
                                <div class="icon">
                                    <i class="ion ion-android-remove-circle"></i>
                                </div>
                            </div>
                        </div>
                        <!-- TARJETA TOTAL DE VENTAS DEL DIA -->
                        <div class="col-lg-3">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3 style="color: white;" id="totalVentasHoy"></h3>
                                    <br>
                                    <p style="color: white;">Total de Ventas Del Dia</p>
                                </div><br>
                                <div class="icon">
                                    <i class="ion ion-android-calendar"></i>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card border-secondary mb-3">
                                <div class="card-header text-white" style="background-color: #32727D;">
                                    <h3 class="card-title text-white" style="display: inline" id="card-title"></h3>
                                    <div class="card-tools offset-lg-8 col-sm-12 " style="display: inline">
                                        <button type="button" class="btn btn-tool text-white"
                                            data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool text-white" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                </div>
                                <div class="card-body" id="collapseExample">
                                    <div class="chart">
                                        <canvas id="barChart"
                                            style="min-height: 250px; height: 300px; max-height: 350px; width: 100%;">

                                        </canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TABLA MAS VENDIDOS  -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card card-info" style="display: inline">
                                <div class="card-header text-white" style="display: inline; background-color: #32727D;">
                                    <h3 class="card-title text-white" style="display: inline">Los 10 Productos mas
                                        Vendidos</h3>
                                    <div class="card-tools offset-lg-5" style="display: inline">
                                        <button style="display: inline" type="button" class="btn btn-tool text-white"
                                            data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button style="display: inline" type="button" class="btn btn-tool text-white"
                                            data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div> <!-- ./ end card-tools -->
                                </div> <!-- ./ end card-header -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="tbl_productos_mas_vendidos">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombre</th>
                                                    <th>Cantidad</th>
                                                    <th>Ventas</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- ./ end card-body -->
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="card card-info" style="display: inline">
                                <div class="card-header text-white" style="display: inline; background-color: #32727D;">
                                    <h3 class="card-title text-white" style="display: inline">Listado de Productos con
                                        Poco Stock</h3>
                                    <div class="card-tools offset-lg-4" style="display: inline">
                                    
                                        <button style="display: inline" type="button" class="btn btn-tool text-white"
                                            data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button style="display: inline" type="button" class="btn btn-tool text-white"
                                            data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div> <!-- ./ end card-tools -->
                                </div> <!-- ./ end card-header -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="tbl_productos_poco_stock">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombre</th>
                                                    <th>Stock Actual</th>
                                                    <th>Minimo Stock</th>
                                                </tr>
                                            </thead>
                                            <div class="card-tools offset-lg-5" style="display: inline">
                                        <button type="button" class="btn btn-danger m-1"><a class="sidebar-link text-white" style="cursor: pointer;" aria-expanded="false" onclick="CargarContenido('vistas/reorden.php','content-wrapper')">Ir a Reorden</a></button></div>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- ./ end card-body -->
                            </div>
                        </div>
                    </div>


                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->


        </div>
    </div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>


<script>
$(document).ready(function() {

    $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: 'POST',
        dataType: 'json',
        success: function(respuesta) {
            $("#totalProductos").html(respuesta[0]['totalProductos']);
            $("#totalProductosMinStock").html(respuesta[0]['productosPocoStock']);
            $("#totalCompras").html('$ ' + respuesta[0]['totalCompras']);
            $("#totalVentas").html('$ ' + respuesta[0]['totalVentas']);
            $("#totalGanancias").html('$ ' + respuesta[0]['ganancias']);
            $("#totalVentasHoy").html('$ ' + respuesta[0]['ventashoy']);
        }

    });

    setInterval(() => {
        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: 'POST',
            dataType: 'json',
            success: function(respuesta) {
                $("#totalProductos").html(respuesta[0]['totalProductos']);
                $("#totalProductosMinStock").html(respuesta[0]['productosPocoStock']);
                $("#totalCompras").html('$ ' + respuesta[0]['totalCompras']);
                $("#totalVentas").html('$ ' + respuesta[0]['totalVentas']);
                $("#totalGanancias").html('$ ' + respuesta[0]['ganancias']);
                $("#totalVentasHoy").html('$ ' + respuesta[0]['ventashoy']);
            }

        })
    }, 10000);

    $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: 'POST',
        data: {
            'accion': 1 //parametro para obtener las ventas del mes
        },
        dataType: 'json',
        success: function(respuesta) {

            var fecha_venta = [];
            var total_venta = [];
            var total_ventas_mes = 0;

            for (let i = 0; i < respuesta.length; i++) {

                fecha_venta.push(respuesta[i]['fecha_venta']);
                total_venta.push(respuesta[i]['total_venta']);
                total_ventas_mes = parseFloat(total_ventas_mes) + parseFloat(respuesta[i][
                    'total_venta'
                ]);
            }


            $("#card-title").html('Ventas del Mes:  P./  ' + total_ventas_mes.toString().replace(
                /\d(?=(\d{3})+\.)/g, "$&,"));


            var barChartCanvas = $("#barChart").get(0).getContext('2d');

            var areaChartData = {
                labels: fecha_venta,
                datasets: [{
                    label: 'Ventas Del Mes',
                    backgroundColor: [
                    '#84B506',
                    '#EF9F15',
                    '#2D8BBA',
                    '#FF3131',
                    '#FF914D',
                    '#84B506',
                    '#EF9F15',
                    '#2D8BBA',
                    '#FF3131',
                    '#FF914D',
                    '#84B506',
                    '#EF9F15',
                    '#2D8BBA',
                    '#FF3131',
                    '#FF914D',
                ],
                    data: total_venta
                }]
            }

            var barChartData = $.extend(true, {}, areaChartData);

            var temp0 = areaChartData.datasets[0];

            barChartData.datasets[0] = temp0;

            var barChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                events: false,
                legend: {
                    display: true
                },
                scales: {
                    xAxes: [{
                        stacked: true,
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                },
                animation: {
                    duration: 500,
                    easing: "easeOutQuart",
                    onComplete: function() {
                        var ctx = this.chart.ctx;
                        ctx.font = Chart.helpers.fontString(Chart.defaults.global
                            .defaultFontFamily, 'normal',
                            Chart.defaults.global.defaultFontFamily);
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';

                        this.data.datasets.forEach(function(dataset) {
                            for (var i = 0; i < dataset.data.length; i++) {
                                var model = dataset._meta[Object.keys(dataset
                                        ._meta)[0]].data[i]._model,
                                    scale_max = dataset._meta[Object.keys(dataset
                                        ._meta)[0]].data[i]._yScale.maxHeight;
                                ctx.fillStyle = '#444';
                                var y_pos = model.y - 5;
                                // Make sure data value does not get overflown and hidden
                                // when the bar's value is too close to max value of scale
                                // Note: The y value is reverse, it counts from top down
                                if ((scale_max - model.y) / scale_max >= 0.93)
                                    y_pos = model.y + 20;
                                ctx.fillText(dataset.data[i], model.x, y_pos);
                            }
                        });
                    }
                }
            }


            new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData
            })


        }


    });

    $.ajax({
        url: "ajax/dashboard.ajax.php",
        type: "POST",
        data: {
            'accion': 2 // listar los 10 productos mas vendidos
        },
        dataType: 'json',
        success: function(respuesta) {

            for (let i = 0; i < respuesta.length; i++) {
                filas = '<tr>' +
                    '<td>' + respuesta[i]['codigo_producto'] + '</td>' +
                    '<td>' + respuesta[i]['descripcion_producto'] + '</td>' +
                    '<td>' + respuesta[i]['cantidad'] + '</td>' +
                    '<td> $' + respuesta[i]['total_venta'] + '</td>' +
                    '</tr>'

                $("#tbl_productos_mas_vendidos").append(filas);

            }

        }
    });

    $.ajax({
        url: "ajax/dashboard.ajax.php",
        type: "POST",
        data: {
            'accion': 3 // listar los  productos con poco stock
        },
        dataType: 'json',
        success: function(respuesta) {

            for (let i = 0; i < respuesta.length; i++) {
                filas = '<tr>' +
                    '<td>' + respuesta[i]['codigo_producto'] + '</td>' +
                    '<td>' + respuesta[i]['descripcion_producto'] + '</td>' +
                    '<td>' + respuesta[i]['stock_producto'] + '</td>' +
                    '<td>' + respuesta[i]['minimo_stock_producto'] + '</td>' +
                    '</tr>'

                $("#tbl_productos_poco_stock").append(filas);

            }

        }
    });



});
</script>