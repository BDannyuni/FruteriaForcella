<?php


class ProductosControlador{

    static public function ctrListarProductos(){

        $productos = ProductosModelo::mdlListarProductos();

        return $productos;
    }

    static public function ctrListarnombreproductos(){

        $nombreproductos = ProductosModelo::mdlListarnombreproductos();

        return $nombreproductos;
    }

    static public function ctrRegistrarProducto($codigo_producto,$id_categoria_producto,$descripcion_producto,$precio_compra_producto,
    $precio_venta_producto,$utilidad,$stock_producto,$minimo_stock,$ventas_producto){

        $registroProducto = ProductosModelo::mdlRegistrarProducto($codigo_producto,$id_categoria,$descripcion_producto,$precio_compra_producto,
        $precio_venta_producto,$utilidad,$stock_producto,$minimo_stock,$ventas_producto);
        

        return $registroProducto;


    }
}