<?php

session_start();
require_once("../model/productos_model.php");
include('../model/db.php');

if (isset($_POST['guardar_grafica'])) {
    $g_p = new producto_control();
    $g_p->guardar();
}

class producto_control
{



    function guardar()
    {
       
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $imagen = $_POST['imagen_g'];

            $prod = new Productos(0, $nombre, $descripcion, $precio, $imagen);
            $n = $prod->getNombre();
            $d = $prod->getDescripcion();
            $p = $prod->getPrecio();
            $i = $prod->getImagen();

            $conectar = new Conectar();
            $conn = $conectar->conexion();

            $query = ("INSERT INTO productos (nombre, descripcion, precio_prom, imagen) values (?, ?, ?, ?)");
            $sentencia = $conn->prepare($query);
            $sentencia->bind_param('ssss', $n, $d, $p, $i);
            $sentencia->execute();
            // $sentencia->bind_result($resultados);
            // $sentencia->fetch();

            // echo " los valores son ", $sentencia, "y se recogieron estos ", $n;


            $_SESSION['mensaje'] = 'Producto guardado';
            $_SESSION['tipo_mensaje'] = 'success';
            $sentencia->close();
            $conn->close();

            header('Location: ../view/producto.php');
        
    }


    function listar()
    {
        $conectar = new Conectar();
        $conn = $conectar->conexion();
        $query = ("SELECT * FROM productos");
        $sentencia = $conn->prepare($query);
        
        $sentencia->execute();
        $sentencia->bind_result($resultados);
        $resultado = $sentencia->fetch();
        return $resultado;
    }
}
