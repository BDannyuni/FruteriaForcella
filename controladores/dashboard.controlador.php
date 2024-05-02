<?php

class DashboardControlador{

    static public function ctrGetDatosDashboard(){

        $datos = DashboardModelo::mdlGetDatosDashboard();

        return $datos;
    }

    static public function ctrGetVentasMesActual(){

        $ventasMesActual = DashboardModelo::mdlGetVentasMesActual();

        return $ventasMesActual;
    }

    static public function ctrProductosMasVendidos(){

        $ProductosMasVendidos = DashboardModelo::mdlProductosMasVendidos();

        return $ProductosMasVendidos;
    }

    static public function ctrProductosPocoStock(){

        $ProductosPocoStock = DashboardModelo::mdlProductosPocoStock();

        return $ProductosPocoStock;
    }

    static public function ctrListarProductos(){

        $ListarProductos = DashboardModelo::mdlListarProductos();

        return $ListarProductos;
    }

    static public function ctrListarCategorias(){

        $ListarCategorias = DashboardModelo::mdlListarCategorias();

        return $ListarCategorias;
    }
    static public function ctrListarProveedores(){

        $ListarProveedores = DashboardModelo::mdlListarProveedores();

        return $ListarProveedores;
    }
    static public function ctrListarVendidosMes(){

        $ListarVendidosMes = DashboardModelo::mdlListarVendidosMes();

        return $ListarVendidosMes;
    }


}