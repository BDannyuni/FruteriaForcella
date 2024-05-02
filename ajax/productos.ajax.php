<?php


class ajaxProductos{

    public $fileProductos;

    public $codigo_producto;
    public $id_categoria_producto;
    public $descripcion_producto;
    public $precio_compra_producto;
    public $precio_venta_producto;
    public $utilidad;
    public $stock_producto;
    public $minimo_stock;
    public $ventas_producto;

    public function ajaxListarProductos(){

        $productos = ProductosControlador::ctrListarProductos();

        echo json_encode($productos, JSON_UNESCAPED_UNICODE);
        exit();

    }
    
    public function ajaxRegistrarProducto(){

        $producto = ProductosControlador::ctrRegistrarProducto($this->$codigo_producto, $this->$id_categoria_producto, $this->$descripcion_producto, $this->$precio_compra_producto,
                                                               $this->$precio_venta_producto, $this->$utilidad, $this->$stock_producto, $this->$minimo_stock, $this->$ventas_producto);

        echo json_encode($producto, JSON_UNESCAPED_UNICODE);
    }

    public function ajaxListarnombreproductos(){

        $nombreproductos = ProductosControlador::ctrListarnombreproductos();

        echo json_encode($nombreproductos, JSON_UNESCAPED_UNICODE);
    }

}


if(isset($_POST['accion']) && $_POST['accion'] == 1){

    $productos = new ajaxProductos();
    $productos -> ajaxListarProductos();


}else if(isset($_POST['accion']) && $_POST['accion'] == 2){

    $registrarProducto -> codigo_producto = $_POST["codigo_producto"];
    $registrarProducto -> id_categoria_producto = $_POST["id_categoria_producto"];
    $registrarProducto -> descripcion_producto = $_POST["descripcion_producto"];
    $registrarProducto -> precio_compra_producto = $_POST["precio_compra_producto"];
    $registrarProducto -> precio_venta_producto = $_POST["precio_venta_producto"];
    $registrarProducto -> utilidad = $_POST["utilidad"];
    $registrarProducto -> stock_producto = $_POST["stock_producto"];
    $registrarProducto -> minimo_stock = $_POST["minimo_stock"];
    $registrarProducto -> ventas_producto = $_POST["ventas_producto"];
    $registrarProducto -> ajaxRegistrarProducto();


}else if (isset($_POST['accion']) && $_POST['accion'] == 6) {
    $nombreproductos = new ajaxProductos();
    $nombreproductos -> ajaxListarnombreproductos();
}else{
    $datos = new AjaxDashboard();
    $datos -> getDatosDashboard();
}