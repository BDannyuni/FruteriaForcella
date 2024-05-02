<?php



require_once "conexion.php";

class CategoriasModelo{

    static public function mdlListarCategorias(){

        $stmt = Conexion::conectar()->prepare("SELECT id_categoria, nombre_categoria
                                                FROM categorias c 
                                                order by nombre_categoria asc");

        $stmt -> exceute();

        return $stmt->fetchAll();

    }
}