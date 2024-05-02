<div class="container-fluid">
    <br><br><br><br>
    <h1>Ventas Del Mes</h1>
    <br>


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
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 style="display: inline" class="card-title fw-semibold mb-4">Productos Mas Populares</h5>
                    <br>
                    <div class="table-responsive">
                        <table id="tbl_mas_vendidos" class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Codigo</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nombre</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Proveedor</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Cantidad</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Ventas</h6>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>

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
        'accion': 7 // listar los productos vendidos en el mes
    },
    dataType: 'json',
    success: function(respuesta) {
        console.log("respuesta", respuesta);

        for (let i = 0; i < respuesta.length; i++) {
            filas = '<tr>' +
                '<td class="border-bottom-0">' + respuesta[i]['codigo_producto'] + '</td>' +
                '<td class="border-bottom-0">' + respuesta[i]['descripcion_producto'] + '</td>' +
                '<td class="border-bottom-0">' + respuesta[i]['nombre_proveedor'] + '</td>' +
                '<td class="border-bottom-0"> <div class="d-flex align-items-center gap-2"> <span class="badge bg-primary rounded-3 fw-semibold">' +
                respuesta[i]['cantidad'] + '</span></div></td>' +
                '<td class="border-bottom-0"><h6 class="fw-semibold mb-0 fs-4">$' + respuesta[i]['total_venta'] + '</h6></td>' +
                '</tr>'

            $("#tbl_mas_vendidos").append(filas);

        }

    }
});
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

</script>

