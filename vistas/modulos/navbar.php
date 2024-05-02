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
                    <li class="nav-item"><img src="../vistas/assets/images/logos/favicon.png" height="60px" class='mb-2'
                            alt="">
                    </li>
                    
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                        <li class="nav-item"><?php
                    echo "<h4 class='nav-link'> $_SESSION[usuario]</h4>";
                  ?></li>
                        

                        <li class="nav-item">

                            <a href="login/procesoExit.php" class="btn btn-outline-primary ">Cerrar Sesion</a>

                        </li>

                    </ul>
                </div>
            </nav>
        </header> 
        <!--  Header End -->
    </div>
    <br> 