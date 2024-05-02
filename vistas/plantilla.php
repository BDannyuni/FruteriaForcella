
<?php
session_start();
if ($_SESSION['cargo'] == '1') {
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fruteria Forcella</title>
    <link rel="shortcut icon" type="image/png" href="vistas/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="vistas/assets/css/styles.min.css" />
    <script src="vistas/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="vistas/assets/js/sidebarmenu.js"></script>
    <script src="vistas/assets/js/app.min.js"></script>
    <script src="vistas/assets/libs/simplebar/dist/simplebar.js"></script>
    <link rel="stylesheet" href="vistas/assets/dist/css/plantilla.css">
    <!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="vistas/assets/plugins/fontawesome-free/css/all.min.css">

    <!-- jQuery css -->
<link rel="stylesheet" src="vistas/assets/plugins/jquery-ui/css/jquery-ui.css">
<!-- jQuery Script -->
<script src="vistas/assets/plugins/jquery-ui/js/jquery-ui.js"></script>


<!-- jQuery -->
<script src="vistas/assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="vistas/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- SweetAlert2 -->
<link rel="stylesheet" href="vistas/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

<!-- ============================================================
    =ESTILOS PARA USO DE DATATABLES JS
    ===============================================================-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
    
<!-- SweetAlert2 -->
<script src="vistas/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- JS Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 <!-- ============================================================
    =LIBRERIAS PARA USO DE DATATABLES JS
    ===============================================================-->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>        
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>


    <!-- ============================================================
    =LIBRERIAS PARA EXPORTAR A ARCHIVOS
    ===============================================================-->
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/assets/dist/js/adminlte.min.js"></script>
    <!-- ChartsJS -->
    <script src="vistas/assets/plugins/chart.js/Chart.min.js"></script>
    <link rel="stylesheet" href="vistas/assets/css/select.css" /> 


    
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <?php
        include "modulos/aside.php";
        include "modulos/navbar.php"
    ?>

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <div class="content-wrapper">

                <?php include "vistas/dashboard.php" ?>

            </div>

        </div>

<br>
        <?php
        include "modulos/footer.php"
  ?>


        <script>
        function CargarContenido(pagina_php, contenedor) {
            $("." + contenedor).load(pagina_php);
        }
        </script>
</body>

</html>


<?php
}
else{
    header("Location:usuario.php");
}

?>