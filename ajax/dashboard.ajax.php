<?php

require_once "../controladores/dashboard.controlador.php";
require_once "../modelos/dashboard.modelo.php";

class AjaxDashboard{

    public function getDatosDashboard(){

        $datos = DashboardControlador::ctrGetDatosDashboard();

        echo json_encode($datos);
    }
    
    public function getVentasMesActual(){
        $ventasMesActual = DashboardControlador::ctrGetVentasMesActual();
        echo json_encode($ventasMesActual);
    }

    public function getProductosMasVendidos(){

        $ProductosMasVendidos = DashboardControlador::ctrProductosMasVendidos();
        echo json_encode($ProductosMasVendidos);

    }

    public function getProductosPocoStock(){

        $ProductosPocoStock = DashboardControlador::ctrProductosPocoStock();
        echo json_encode($ProductosPocoStock);

    }

    public function getListarProductos(){

        $ListarProductos = DashboardControlador::ctrListarProductos();
        echo json_encode($ListarProductos);

    }
    public function getListarCategorias(){

        $ListarCategorias = DashboardControlador::ctrListarCategorias();
        echo json_encode($ListarCategorias);

    }
    public function getListarProveedores(){

        $ListarProveedores = DashboardControlador::ctrListarProveedores();
        echo json_encode($ListarProveedores);

    }
    public function getListarVendidosMes(){

        $ListarVendidosMes = DashboardControlador::ctrListarVendidosMes();
        echo json_encode($ListarVendidosMes);

    }

    public function getLogin(){

        $Login = DashboardControlador::ctrLogin();
        echo json_encode($Login);

    }
    


}

if(isset($_POST['accion']) && $_POST['accion'] == 1){ //Ejecutar funcion ventas del mes (grafico de barras)

    $ventasMesActual = new AjaxDashboard();
    $ventasMesActual -> getVentasMesActual();

}else if(isset($_POST['accion']) && $_POST['accion'] == 2){  // Ejecutar funcion de productos mas vendidos

    $ProductosMasVendidos = new AjaxDashboard();
    $ProductosMasVendidos -> getProductosMasVendidos();

}else if(isset($_POST['accion']) && $_POST['accion'] == 3){ //Ejecutar funcion Productos Poco Stock

    $ProductosPocoStock = new AjaxDashboard();
    $ProductosPocoStock -> getProductosPocoStock();

}else if(isset($_POST['accion']) && $_POST['accion'] == 4){ //Ejecutar funcion Listado de Productos

    $ListarProductos = new AjaxDashboard();
    $ListarProductos -> getListarProductos();

}else if(isset($_POST['accion']) && $_POST['accion'] == 5){ //Ejecutar funcion Listado de Categorias

    $ListarCategorias = new AjaxDashboard();
    $ListarCategorias -> getListarCategorias();

}else if(isset($_POST['accion']) && $_POST['accion'] == 6){ //Ejecutar funcion Listado de Categorias

    $ListarProveedores = new AjaxDashboard();
    $ListarProveedores -> getListarProveedores();

}else if(isset($_POST['accion']) && $_POST['accion'] == 7){ //Ejecutar funcion Listado de Productos Vendidos en el Mes

    $ListarVendidosMes = new AjaxDashboard();
    $ListarVendidosMes -> getListarVendidosMes();

}else{
    $datos = new AjaxDashboard();
    $datos -> getDatosDashboard();
}