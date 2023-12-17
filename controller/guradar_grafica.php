<?php

include('./model/db.php');

if (isset($_POST['guardar_grafica'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen_g'];

    $query = "INSERT INTO productos (nombre, descripcion, precio, imagen) 
    values ('$nombre', '$descripcion', $precio, $imagen)";

    $resultado + mysqli_query($conn, $query);
    if(!$resultado){
        die("Fallo subir información del producto");
    }

    $_SESSION['mensaje'] = 'Producto guardado';
    $_SESSION['tipo_mensaje'] = 'success';
    header('Location: ./view/producto');

}
