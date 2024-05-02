   <!-- Sidebar Start -->
   <aside class="left-sidebar text-white">
       <!-- Sidebar scroll-->
       <div>
           <div class="brand-logo d-flex align-items-center justify-content-between">
               <a onclick="CargarContenido('vistas/dashboard.php','content-wrapper')" class="text-nowrap logo-img">
                   <img src="vistas/assets/images/logos/favicon.png" width="100" alt="" /> 
               </a>
               <h4 class="text-white ">Fruteria Forcella</h4>
               <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                   <i class="ti ti-x fs-8"></i>
               </div>
           </div>
           <!-- Sidebar navigation-->
           <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
               <ul id="sidebarnav">
                   <li class="nav-small-cap"> 
                       <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                       <span class="hide-menu text-white">Inicio</span>
                   </li>
                   <li class="sidebar-item">
                       <a style="cursor: pointer;" class="sidebar-link" aria-expanded="false" onclick="CargarContenido('vistas/dashboard.php','content-wrapper')">
                           <span><i class="ti ti-layout-dashboard text-white"></i></span>
                           <span class="hide-menu text-white">Tablero Principal</span>
                       </a>
                   </li>
                   <li class="nav-small-cap">
                       <i class="ti ti-dots nav-small-cap-icon fs-4 text-white"></i>
                       <span class="hide-menu text-white">Inventario</span>
                   </li>
                   <li class="sidebar-item">
                   <a class="sidebar-link" style="cursor: pointer;" aria-expanded="false" onclick="CargarContenido('vistas/productos.php','content-wrapper')">
                           <span>
                               <i class="ti ti-package text-white"></i>
                           </span>
                           <span class="hide-menu text-white">Productos</span>
                       </a>
                   </li>
                   <li class="sidebar-item">
                   <a class="sidebar-link" style="cursor: pointer;" aria-expanded="false" onclick="CargarContenido('vistas/agregarproductos.php','content-wrapper')">
                           <span>
                               <i class="ti ti-plus text-white"></i>
                           </span>
                           <span class="hide-menu text-white">Agregar Productos</span>
                       </a>
                   </li>
                   <li class="sidebar-item">
                   <a class="sidebar-link" style="cursor: pointer;" aria-expanded="false" onclick="CargarContenido('vistas/categorias.php','content-wrapper')">
                           <span>
                               <i class="ti ti-cards text-white"></i>
                           </span>
                           <span class="hide-menu text-white">Categorias</span>
                       </a>
                   </li>
                   <li class="sidebar-item">
                   <a class="sidebar-link" style="cursor: pointer;" aria-expanded="false" onclick="CargarContenido('vistas/proveedores.php','content-wrapper')">
                           <span>
                               <i class="ti ti-user text-white"></i>
                           </span>
                           <span class="hide-menu text-white">Proveedores</span>
                       </a>
                   </li>
                   
                   <li class="nav-small-cap">
                       <i class="ti ti-dots nav-small-cap-icon fs-4 text-white"></i>
                       <span class="hide-menu text-white">Venta</span>
                   </li>
                   <li class="sidebar-item">
                   <a class="sidebar-link" style="cursor: pointer;"  href="vistas/venta.php" aria-expanded="false">
                           <span>
                               <i class="ti ti-shopping-cart text-white"></i>
                           </span>
                           <span class="hide-menu text-white">Venta</span>
                       </a>
                   </li>
                   <li class="sidebar-item">
                   <a class="sidebar-link" style="cursor: pointer;" aria-expanded="false" onclick="CargarContenido('vistas/reorden.php','content-wrapper')">
                           <span>
                               <i class="ti ti-file-description text-white"></i>
                           </span>
                           <span class="hide-menu text-white">Reorden</span>
                       </a>
                   </li>
                   <li class="sidebar-item">
                   <a class="sidebar-link" style="cursor: pointer;" aria-expanded="false" onclick="CargarContenido('vistas/ventasdeldia.php','content-wrapper')">
                           <span>
                               <i class="ti ti-calendar text-white"></i>
                           </span>
                           <span class="hide-menu text-white">Ventas Del Mes</span>
                       </a>
                   </li>
                   <li class="sidebar-item">
                   <a class="sidebar-link" style="cursor: pointer;" aria-expanded="false" onclick="CargarContenido('vistas/ventaspopulares.php','content-wrapper')">
                           <span>
                               <i class="ti ti-star text-white"></i>
                           </span>
                           <span class="hide-menu text-white">Ventas Populares</span>
                       </a>
                   </li>
                   <li class="nav-small-cap">
                       <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                       <span class="hide-menu text-white">EXTRA</span>
                   </li>
                   <li class="sidebar-item">
                   <a class="sidebar-link" style="cursor: pointer;" aria-expanded="false" onclick="CargarContenido('vistas/admusuarios.php','content-wrapper')">
                           <span>
                               <i class="ti ti-user-plus text-white"></i>
                           </span>
                           <span class="hide-menu text-white">Administrar Usuarios</span>
                       </a>
                   </li>
                   
                   <li class="sidebar-item">
                       <a class="sidebar-link" href="login/procesoExit.php" aria-expanded="false">
                           <span>
                               <i class="ti ti-login text-white"></i>
                           </span>
                           <span class="hide-menu text-white">Cerrar Sesion</span>
                       </a>
                   </li>
                   
                  <!--   <li class="sidebar-item">
                       <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                           <span>
                               <i class="ti ti-alert-circle"></i>
                           </span>
                           <span class="hide-menu">Register</span>
                       </a>
                   </li>-->

               </ul>

           </nav>
           <!-- End Sidebar navigation -->
       </div>
       <!-- End Sidebar scroll-->
   </aside>
   <!--  Sidebar End -->
   