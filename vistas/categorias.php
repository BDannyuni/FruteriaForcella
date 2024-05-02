<div class="container-fluid">
    <br><br><br>
    <h1>Categorias</h1><br>

    <div class="row">
    <div class="col-lg-6">
            <div class="card card-info" style="display: inline">
                <div class="card-header text-white" style="display: inline; background-color: #32727D;">
                    <h3 class="card-title text-white" style="display: inline">Agregar Nueva Categoria</h3>
                    <div class="card-tools offset-lg-6" style="display: inline">

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
                <form action="modelos/insertar.categorias.php" method="post">
                <div class="mb-3">
                                        <label class="form-label-nombre">Id</label>
                                        <input type="text" class="form-control" name="id_categoria" id="nombre">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label-nombre">Nombre</label>
                                        <input type="text" class="form-control" name="nombre_categoria" id="nombre">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label-categoria">Aplica Peso</label>
                                        <select name="aplicapeso" class="form-select" id="aplicapeso">
                                        <option value="0">Selecione si aplica peso o no</option>
                                            <option value="2">Si</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>
                                    <div class="card-tools offset-lg-4" style="display: inline">
                                    <input class='btn btn-success' type="submit" name="registrar_categoria" value="Registrar Producto">
                                    <button class="btn btn-primary">Regresar</button></div>
                                </form>
                </div> <!-- ./ end card-body -->
            </div>
        </div>
        <div class="col-lg-6">
                            <div class="card border-secondary mb-3">
                                <div class="card-header text-white" style="background-color: #32727D;">
                                    <h3 class="card-title text-white" style="display: inline" id="card-title"></h3>
                                    <div class="card-tools offset-lg-7 " style="display: inline">
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
                                            style="min-height: 250px; height: 150px; max-height: 350px; width: 100%;">

                                        </canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
        
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 style="display: inline" class="card-title fw-semibold mb-4">Inventario</h5>
                    <div class="card-tools offset-lg-8 " style="display: inline">
                        <h5 style="display: inline" class="card-title fw-semibold mb-4">Total de Categorias Registradas</h5>
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
                                        <h6 class="fw-semibold mb-0">Nombre</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Aplica Peso</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Fecha de Creacion</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Fecha de Modificacion</h6>
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

            $consulta = "SELECT * FROM categorias";
            $resultado = mysqli_query($getconex, $consulta);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td class='border-bottom-0'>" . $fila["id_categoria"] . "</td>";
                echo "<td class='border-bottom-0'>" . $fila["nombre_categoria"] . "</td>";
                echo "<td class='border-bottom-0'> <div class='d-flex align-items-center gap-2'> <span class='badge bg-primary rounded-3 fw-semibold'>" . $fila["aplica_peso"] . "</span></div></td>";
                echo "<td class='border-bottom-0'>" . $fila["fecha_creacion_categoria"] . "</td>";
                echo "<td class='border-bottom-0'>" . $fila["fecha_actualizacion_categoria"] . "</td>";
                echo "<td class='border-bottom-0'>
                    <form action='modelos/editar.categorias.php' method='POST'>
                    <input type='hidden' name='id_categoria' value='" . $fila["id_categoria"] . "'>
                    <input type='hidden' name='nombre_categoria' value='" . $fila["nombre_categoria"] . "'>
                    <input type='hidden' name='aplica_peso' value='" . $fila["aplica_peso"] . "'>
                    <input type='hidden' name='fecha_creacion_categoria' value='" . $fila["fecha_creacion_categoria"] . "'> 
                    <input type='hidden' name='fecha_actualizacion_categoria' value='" . $fila["fecha_actualizacion_categoria"] . "'>  
                    <input type='submit' name='editar' class='btn btn-info '  value='Editar' '>
                    </form>
                </td>";
                echo "<td >
                    <form action='modelos/eliminar.categorias.php' method='POST'>
                    <input type='hidden' name='id_categoria' value='" . $fila["id_categoria"] . "'>
                    <input type='hidden' name='nombre_categoria' value='" . $fila["nombre_categoria"] . "'>
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

</div>

<script>
                $(document).ready(function() {

                    $.ajax({
                        url: "ajax/dashboard.ajax.php",
                        method: 'POST',
                        dataType: 'json',
                        success: function(respuesta) {
                            console.log("respuesta", respuesta);
                            $("#totalProductos").html(respuesta[0]['totalcategorias']);
                        }

                    })
                });
                </script>
<script>
$.ajax({
        url: "ajax/dashboard.ajax.php",
        method: 'POST',
        data: {
            'accion': 5 //parametro para obtener las ventas del mes
        },
        dataType: 'json',
        success: function(respuesta) {

            var fecha_venta = [];
            var total_venta = [];
            var total_ventas_mes = 0;

            for (let i = 0; i < respuesta.length; i++) {

                fecha_venta.push(respuesta[i]['nombre_categoria']);
                total_venta.push(respuesta[i]['aplica_peso']);
                total_ventas_mes = parseFloat(total_ventas_mes) + parseFloat(respuesta[i][
                    'total_venta'
                ]);
            }


            $("#card-title").html('Categorias de Peso');


            var barChartCanvas = $("#barChart").get(0).getContext('2d');

            var areaChartData = {
                labels: fecha_venta,
                datasets: [{
                    label: ' ',
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