<div class="container-fluid">
    <br><br><br>
    <h1>Reorden</h1><br>



    <div class="row">
        <div class="col-12">
            <div class="card border-secondary mb-3">
                <div class="card-header text-white" style="background-color: #32727D;">
                    <h3 class="card-title text-white" style="display: inline" id="card-title"></h3>
                    <div class="card-tools offset-lg-9 col-sm-12 " style="display: inline">
                        <button type="button" class="btn btn-tool text-white" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool text-white" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                </div>
                <div class="card-body" id="collapseExample">
                    <div class="chart">
                        <canvas id="barChart" style="min-height: 250px; height: 300px; max-height: 350px; width: 100%;">

                        </canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-info" style="display: inline">
                <div class="card-header text-white" style="display: inline; background-color: #32727D;">
                    <h3 class="card-title text-white" style="display: inline">Listado de Productos con
                        Poco Stock</h3>
                    <div class="card-tools offset-lg-8" style="display: inline">

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
                                    <th>Precio de Compra</th>
                                </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div> <!-- ./ end card-body -->
            </div>
        </div>
    </div>

</div>

</div>

<script>
$.ajax({
    url: "ajax/dashboard.ajax.php",
    type: "POST",
    data: {
        'accion': 3 // listar los  productos con poco stock
    },
    dataType: 'json',
    success: function(respuesta) {
        console.log("respuesta", respuesta);

        for (let i = 0; i < respuesta.length; i++) {
            filas = '<tr>' +
                '<td class="border-bottom-0">' + respuesta[i]['codigo_producto'] + '</td>' +
                '<td class="border-bottom-0">' + respuesta[i]['descripcion_producto'] + '</td>' +
                '<td class="border-bottom-0"><div class="d-flex align-items-center gap-2"> <span class="badge bg-primary rounded-3 fw-semibold">' + respuesta[i]['stock_producto'] + '</span></div></td>' +
                '<td class="border-bottom-0"><div class="d-flex align-items-center gap-2"> <span class="badge bg-danger rounded-3 fw-semibold">' + respuesta[i]['minimo_stock_producto'] + '</span></div></td>' +
                '<td class="border-bottom-0"><h6 class="fw-semibold mb-0 fs-4">$' + respuesta[i]['precio_compra_producto'] + '</td>' +
                '</tr>'

            $("#tbl_productos_poco_stock").append(filas);

        }

    }
});

$.ajax({
    url: "ajax/dashboard.ajax.php",
    method: 'POST',
    data: {
        'accion': 3, //parametro para obtener los Productos mas vendidos
    },
    dataType: 'json',
    success: function(respuesta) {
        console.log("respuesta", respuesta);

        var fecha_venta = [];
        var total_venta = [];
        var total_ventas_mes = 0;
        var nombre = [];

        for (let i = 0; i < respuesta.length; i++) {

            fecha_venta.push(respuesta[i]['descripcion_producto']);
            total_venta.push(respuesta[i]['stock_producto']);
        }

        console.log(total_ventas_mes);

        $("#card-title").html('Productos con Poco Stock');


        var barChartCanvas = $("#barChart").get(0).getContext('2d');

        var areaChartData = {
            labels: fecha_venta,
            datasets: [{
                label: 'Producto con Poco Stock',
                backgroundColor: [
                    '#84B506',
                    '#EF9F15',
                    '#2D8BBA',
                    '#951C29',
                    '#CB6CE6',
                    '#84B506',
                    '#EF9F15',
                    '#2D8BBA',
                    '#951C29',
                    '#CB6CE6',
                    '#84B506',
                    '#EF9F15',
                    '#2D8BBA',
                    '#951C29',
                    '#CB6CE6',
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
</script>


<script>
$(document).ready(function() {
    
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: 'POST',
        dataType: 'json',
        success: function(respuesta) {
            console.log("respuesta", respuesta);
            $("#TotalDeVentas").html('$ ' + respuesta[0]['totalVentas']);
        }

    });
});
</script>