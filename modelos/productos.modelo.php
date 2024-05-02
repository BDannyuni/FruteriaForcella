<?php

require_once "conexion.php";

class ProductosModelo{

    static public function mdlListarProductos(){

        $stmt = Conexion::conectar()->prepare('call prc_ListarProductos()');
    
        $stmt->execute();


        return $stmt->fetchAll();
    }

    static public function mdlListarnombreproductos(){

        $stmt = Conexion::conectar()->prepare("SELECT Concat(codigo_producto , ' - ' ,c.nombre_categoria, ' - ' ,descripcion_producto, ' -s ' ,p.precio_venta_producto) as decripcion_producto 
                                               FROM productos p inner join categorias c on p.id_categoria_producto = c.id_categoria");
    
        $stmt->execute();


        return $stmt->fetchAll();
    }


    static public function mdlRegistrarProducto($codigo_producto,$id_categoria_producto,$descripcion_producto,$precio_compra_producto,
                                                $precio_venta_producto,$utilidad,$stock_producto,$minimo_stock,$ventas_producto){
try{
$fecha = date('Y-m-d');

        $stm = Conexion::conectar()->prepare("INSERT INTO productos(codigo_producto,
                                                                    id_categoria_producto,
                                                                    descripcion_producto,
                                                                    precio_compra_producto,
                                                                    precio_venta_producto,
                                                                    utilidad,
                                                                    stock_producto,
                                                                    minimo_stock_producto,
                                                                    ventas_producto,
                                                                    fecha_creacion_producto,
                                                                    fecha_actualizacion_producto)
                                            VALUES (:codigo_producto,
                                                    :id_categoria_producto,
                                                    :descripcion_producto,
                                                    :precio_compra_producto,
                                                    :precio_venta_producto,
                                                    :utilidad,
                                                    :stock_producto,
                                                    :minimo_stock_producto,
                                                    :ventas_producto,
                                                    :fecha_creacion_producto,
                                                    :fecha_actualizacion_producto)");




        $stm -> bindParam(":codigo_producto", $codigo_producto , PDO::PARAM_STR);
        $stm -> bindParam(":id_categoria_producto", $id_categoria_producto , PDO::PARAM_STR);
        $stm -> bindParam(":descripcion_producto", $descripcion_producto , PDO::PARAM_STR);
        $stm -> bindParam(":precio_compra_producto", $precio_compra_producto , PDO::PARAM_STR);
        $stm -> bindParam(":precio_venta_producto", $precio_venta_producto , PDO::PARAM_STR);
        $stm -> bindParam(":utilidad", $utilidad , PDO::PARAM_STR);
        $stm -> bindParam(":stock_producto", $stock_producto , PDO::PARAM_STR);
        $stm -> bindParam(":minimo_stock_producto", $minimo_stock_producto , PDO::PARAM_STR);
        $stm -> bindParam(":ventas_producto", $ventas_producto , PDO::PARAM_STR);
        $stm -> bindParam(":fecha_creacion_producto", $fecha , PDO::PARAM_STR);
        $stm -> bindParam(":fecha_actualizacion_producto", $fecha , PDO::PARAM_STR);



        if ($stm -> execute()) {
            $resultado = "ok";
        } else {
            $resultado = "error";
        }
    }
    catch (Exception $e){
        $resultado = 'Excepcion capturada: '. $e->getMessage(). "\n";
    }

return $resultado;

$stmt = null;

}
}
