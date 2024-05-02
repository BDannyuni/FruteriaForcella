

<?php
session_start();
session_destroy();
include("login/procesoLogeo.php")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruteria Forcella</title>
    <link rel="shortcut icon" type="image/png" href="vistas/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="login/login.css">
    <link rel="stylesheet" href="login/login.js">
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
<body><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="modelos/insertar.usuarios.php" method="post">
        <h1>Registrarse</h1><br>
                        
                            <input type="text" placeholder="Nombre Completo" class="form-control" name="nombre_completo_usuario" id="nombre_completo_usuario">
                       
                       
                            <input type="text" placeholder="Correo Electronico" class="form-control" name="correo_usuario" id="correo_usuario">
                      
                        
                            <input type="text" placeholder="Nombre de Usuario" class="form-control" name="usuario" id="usuario">
                       
                       
                            <input type="password" placeholder="Contraseña" class="form-control" name="contra_usuario" id="contra_usuario">
                      
                            <select name="tipo_usuario" class="select-css" id="tipo_usuario">
                                <option value="0">Selecione el Tipo de Usuario</option>
                                <option value="1">Administrador</option>
                                <option value="2">Usuario</option>
                            </select>
                        

                        <div class="card-tools offset-lg-2" style="display: inline">
                            <input class='btn btn-success' type="submit" name="registrar_usuario"
                                value="Registrar Proveedor">
                        </div>
                    </form>
    </div>
    <div class="form-container sign-in-container">
        <form method="post" action="#">
            <h1>Iniciar Sesion</h1>
            <?php
                include("login/procesoLogeo.php");
            ?>
            <div class="social-container">
            </div>
            <input type="text" placeholder="Nombre de Usuario" name="Usuario" />
            <input type="password" placeholder="Contraseña" name="Contraseña"/>
            <a href="#">¿olvidaste tu contraseña?</a>
            <input type="submit" name="btningresar" value="INICIAR SESION" class="btn"/>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Bienvenido por primera vez!!</h1><br>
                <img src="vistas/assets/images/logos/logo-fruteria.png" height="250px" alt=""><br>
                <button class="ghost" id="signIn">Iniciar Sesion</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Bienvenido de Vuelta!!</h1><br>
                <img src="vistas/assets/images/logos/logo-fruteria.png" height="250px"  alt=""><br>
                <button class="ghost" id="signUp">Crear cuenta</button>
            </div>
        </div>
    </div>
</div>


<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>

</body>
</html>
