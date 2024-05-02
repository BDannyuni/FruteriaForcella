<link rel='stylesheet' type='text/css' media='screen' href='fontawesome-free/css/all.min.css'>
<div class="container-fluid"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(vistas/assets/images/backgrounds/agregar.jpg) ; background-size:cover;">
    <br><br><br><br>
    <h1 class="offset-lg-5 text-white">Agregar Productos</h1>
    <div class="row offset-lg-4">
        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">
                    <form action="modelos/insertar.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Codigo</label>
                            <input type="text" class="form-control" name="codigo" id="nombre">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Categoria</label>
                            <select name="categorias" class="form-select" id="categorias">
                                <option value="0"> Selecione Una Categoria</option>
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
                                        mysqli_close($getconex);
                                        ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Precio de Compra</label>
                            <input type="text" class="form-control" name="Pc" id="Pc">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Precio de Venta</label>
                            <input type="text" class="form-control" name="Pv" id="Pv">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Utilidad</label>
                            <input type="text" class="form-control" name="utilidad" id="utilidad">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stock</label>
                            <input type="text" class="form-control" name="stock" id="stock">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Minimo de Stock</label>
                            <input type="text" class="form-control" name="minstock" id="minstock">
                        </div>
                        <div class="card-tools offset-lg-4" style="display: inline">
                        <input class='btn btn-success' type="submit" name="registrar" value="Registrar Producto">
                    </form>
                </div>


            </div>
        </div>
        
    </div><br><br><br><br><br><br>
</div>

</div>
</div>

</div>


<script>
$.ajax({
    url: "ajax/dashboard.ajax.php",
    type: "POST",
    data: {
        'accion': 5 // listar las Categoria
    },
    dataType: 'json',
    success: function(respuesta) {

        for (let i = 0; i < respuesta.length; i++) {
            filas = '<tr>' +
                '<td>' + respuesta[i]['id_categoria'] + '</td>' +
                '<td>' + respuesta[i]['nombre_categoria'] + '</td>' +
                '<td>' + respuesta[i]['aplica_peso'] + '</td>' +
                '</tr>'

            $("#tbl_categorias").append(filas);

        }

    }
});
</script>