<?php
$host='localhost';
$bd='gesta';
$user='postgres';
$pass='12345678';

$conexion= pg_connect("host=$host dbname=$bd user=$user password=$pass");
if ($conexion){
    echo 'Conexion exitosa a la base de datos';

} else {
    echo 'Lo sentimos. No fue posible realizar la conexion.';

}

?>