<?php

require_once "conexion.php";

class DashboardModelo{
    static public function mdlGetDatosDashboard(){

        $stmt = Conexion::conectar()->prepare('call prc_ObtenerDatosDasboard()');
    
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlGetVentasMesActual(){

        $stmt = Conexion::conectar()->prepare('call prc_ObtenerVentasMesActual()');
    
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


    static public function mdlProductosMasVendidos(){

        $stmt = Conexion::conectar()->prepare('call prc_ListarProductosMasVendidos()');
    
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlProductosPocoStock(){

        $stmt = Conexion::conectar()->prepare('call prc_ProductosPocoStock()');
    
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlListarProductos(){

        $stmt = Conexion::conectar()->prepare('call prc_ListarProductos()');
    
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlListarCategorias(){

        $stmt = Conexion::conectar()->prepare('call prc_ListarCategorias()');
    
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlListarProveedores(){

        $stmt = Conexion::conectar()->prepare('call prc_ListarProveedores()');
    
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    static public function mdlListarVendidosMes(){

        $stmt = Conexion::conectar()->prepare('call prc_ListarProductosdelmesVendidos()');
    
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


}