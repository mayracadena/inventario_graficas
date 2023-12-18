<?php
class Conectar
{
    public static function conexion()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'graficas') or die(mysqli_error(mysqli_init()));
        return $conn;

        /* if(isset($conn)){
    echo "la base de datos esta conectada";
}
*/
    }
}
